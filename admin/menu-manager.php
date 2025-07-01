<?php
// Simple admin interface for managing menu items
require_once '../includes/menu_data.php';

// Handle form submissions for adding new items
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'add') {
        // In a real application, you'd save to database
        // For now, we'll just show a message
        $message = "New menu item would be added: " . $_POST['name'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Manager - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1><i class="fas fa-utensils"></i> Menu Manager</h1>
        
        <?php if (isset($message)): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>

        <!-- Add New Menu Item Form -->
        <div class="card mb-4">
            <div class="card-header">
                <h5><i class="fas fa-plus"></i> Add New Menu Item</h5>
            </div>
            <div class="card-body">
                <form method="POST">
                    <input type="hidden" name="action" value="add">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Item Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-control" id="category" name="category" required>
                                    <option value="breakfast">Breakfast</option>
                                    <option value="lunch">Lunch</option>
                                    <option value="dinner">Dinner</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image Path</label>
                                <input type="text" class="form-control" id="image" name="image" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Add Menu Item
                    </button>
                </form>
            </div>
        </div>

        <!-- Current Menu Items -->
        <div class="card">
            <div class="card-header">
                <h5><i class="fas fa-list"></i> Current Menu Items</h5>
            </div>
            <div class="card-body">
                <?php
                $categories = ['breakfast', 'lunch', 'dinner'];
                foreach ($categories as $category):
                    $items = getMenuItemsByCategory($category);
                    if (!empty($items)):
                ?>
                <h6 class="text-capitalize text-primary mt-3"><?php echo $category; ?> (<?php echo count($items); ?> items)</h6>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td><strong><?php echo htmlspecialchars($item['name']); ?></strong></td>
                                <td>$<?php echo number_format($item['price'], 2); ?></td>
                                <td><?php echo htmlspecialchars($item['description']); ?></td>
                                <td>
                                    <img src="../<?php echo htmlspecialchars($item['image']); ?>" 
                                         alt="<?php echo htmlspecialchars($item['name']); ?>" 
                                         style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>
                                    <a href="../menu-detail.php?id=<?php echo $item['id']; ?>" 
                                       class="btn btn-sm btn-outline-primary" target="_blank">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php 
                    endif;
                endforeach; 
                ?>
            </div>
        </div>

        <div class="mt-4">
            <a href="../menu-list.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Menu
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 