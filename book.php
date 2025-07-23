<?php
// Set page-specific variables
$page_title = "Book a Table - ChachuKiBiryani";
$page_description = "Reserve your table at ChachuKiBiryani. Book online for a memorable dining experience with authentic Indian cuisine.";

// Include database connection
require_once 'includes/db_connect.php';

// Process form submission
$booking_message = '';
$booking_success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $persons = (int)($_POST['persons'] ?? 0);
    $date = trim($_POST['date'] ?? '');
    $time = trim($_POST['time'] ?? '');
    $special_requests = trim($_POST['special_requests'] ?? '');
    
    // Validate input
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    
    if (empty($phone)) {
        $errors[] = 'Phone number is required';
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required';
    }
    
    if ($persons < 1 || $persons > 10) {
        $errors[] = 'Please select number of persons (1-10)';
    }
    
    if (empty($date)) {
        $errors[] = 'Date is required';
    }
    
    if (empty($time)) {
        $errors[] = 'Time is required';
    }
    
    // Check if date is not in the past
    $booking_date = new DateTime($date . ' ' . $time);
    $now = new DateTime();
    if ($booking_date <= $now) {
        $errors[] = 'Booking date and time must be in the future';
    }
    
    if (empty($errors)) {
        try {
            // Insert booking into database
            $sql = "INSERT INTO table_bookings (name, phone, email, persons, booking_date, booking_time, special_requests, status, created_at) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, 'pending', NOW())";
            
            $booking_id = insertData($sql, [$name, $phone, $email, $persons, $date, $time, $special_requests]);
            
            if ($booking_id) {
                $booking_success = true;
                $booking_message = 'Thank you! Your table reservation has been submitted successfully. We will confirm your booking shortly.';
                
                // Clear form data
                $name = $phone = $email = $special_requests = '';
                $persons = 0;
                $date = $time = '';
            } else {
                $booking_message = 'Sorry, there was an error processing your booking. Please try again.';
            }
        } catch (Exception $e) {
            error_log("Booking error: " . $e->getMessage());
            $booking_message = 'Sorry, there was an error processing your booking. Please try again.';
        }
    } else {
        $booking_message = 'Please correct the following errors: ' . implode(', ', $errors);
    }
}

// Include header
include 'includes/header.php';
?>

<!-- book section -->
<section class="book_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Book A Table
            </h2>
        </div>
        
        <?php if ($booking_message): ?>
        <div class="alert alert-<?php echo $booking_success ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
            <?php echo htmlspecialchars($booking_message); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form_container">
                    <form action="" method="POST">
                        <div>
                            <input type="text" class="form-control" name="name" placeholder="Your Name" 
                                   value="<?php echo htmlspecialchars($name ?? ''); ?>" required />
                        </div>
                        <div>
                            <input type="tel" class="form-control" name="phone" placeholder="Phone Number" 
                                   value="<?php echo htmlspecialchars($phone ?? ''); ?>" required />
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" placeholder="Your Email" 
                                   value="<?php echo htmlspecialchars($email ?? ''); ?>" required />
                        </div>
                        <div>
                            <select class="form-control nice-select wide" name="persons" required>
                                <option value="" disabled <?php echo !isset($persons) || $persons == 0 ? 'selected' : ''; ?>>
                                    How many persons?
                                </option>
                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                <option value="<?php echo $i; ?>" <?php echo (isset($persons) && $persons == $i) ? 'selected' : ''; ?>>
                                    <?php echo $i; ?>
                                </option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div>
                            <input type="date" class="form-control" name="date" 
                                   value="<?php echo htmlspecialchars($date ?? ''); ?>" 
                                   min="<?php echo date('Y-m-d'); ?>" required />
                        </div>
                        <div>
                            <select class="form-control nice-select wide" name="time" required>
                                <option value="" disabled <?php echo !isset($time) || empty($time) ? 'selected' : ''; ?>>
                                    Select Time
                                </option>
                                <?php
                                $start_time = '11:00';
                                $end_time = '22:00';
                                $interval = 30; // 30 minutes
                                
                                $current = strtotime($start_time);
                                $end = strtotime($end_time);
                                
                                while ($current <= $end) {
                                    $time_option = date('H:i', $current);
                                    $selected = (isset($time) && $time == $time_option) ? 'selected' : '';
                                    echo "<option value=\"$time_option\" $selected>$time_option</option>";
                                    $current = strtotime("+$interval minutes", $current);
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <textarea class="form-control" name="special_requests" placeholder="Special Requests (Optional)" 
                                      rows="3"><?php echo htmlspecialchars($special_requests ?? ''); ?></textarea>
                        </div>
                        <div class="btn_box">
                            <button type="submit">
                                Book Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map_container ">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end book section -->

<!-- Additional JavaScript for form validation -->
<?php
$additional_scripts = '
<script>
$(document).ready(function() {
    // Set minimum date to today
    var today = new Date().toISOString().split("T")[0];
    $("input[name=\'date\']").attr("min", today);
    
    // Form validation
    $("form").on("submit", function(e) {
        var isValid = true;
        var requiredFields = ["name", "phone", "email", "persons", "date", "time"];
        
        requiredFields.forEach(function(field) {
            var value = $("[name=\'" + field + "\']").val();
            if (!value || value.trim() === "") {
                isValid = false;
                $("[name=\'" + field + "\']").addClass("is-invalid");
            } else {
                $("[name=\'" + field + "\']").removeClass("is-invalid");
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            alert("Please fill in all required fields.");
        }
    });
    
    // Remove validation styling on input
    $("input, select").on("input change", function() {
        $(this).removeClass("is-invalid");
    });
});
</script>
';
?>

<?php
// Include footer
include 'includes/footer.php';
?> 