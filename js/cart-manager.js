/**
 * Dynamic Cart Manager for ChachuKiBiryani
 * Handles cart operations with smooth animations and great UX
 */

class CartManager {
    constructor() {
        this.cart = JSON.parse(localStorage.getItem('chachukiCart')) || [];
        this.cartBadge = $('.cart-badge');
        this.cartSidebar = $('#shopping-cart-sidebar');
        this.cartList = $('.cart-list');
        this.cartInfo = $('.cart-info');
        
        this.init();
    }

    init() {
        this.updateCartBadge();
        this.updateCartSidebar();
        this.bindEvents();
        
        // Fallback: Reset any stuck buttons on page load
        this.resetStuckButtons();
    }

    // Reset any buttons that might be stuck in processing state
    resetStuckButtons() {
        $('.add-to-cart.processing, .processing').each(function() {
            const button = $(this);
            const originalText = button.data('original-text') || 'Add to Cart';
            
            // Force reset all states
            button.removeClass('processing')
                  .removeClass('loading')
                  .removeClass('success')
                  .addClass('add-to-cart')
                  .html(originalText)
                  .prop('disabled', false)
                  .css('pointer-events', 'auto')
                  .removeAttr('style');
            
            console.log('Reset stuck button:', originalText);
        });
        
        // Also reset any buttons that might have lost their add-to-cart class
        $('button[data-id]').not('.add-to-cart').each(function() {
            const button = $(this);
            if (button.hasClass('processing') || button.html().includes('Adding...')) {
                const originalText = button.data('original-text') || 'Add to Cart';
                button.removeClass('processing')
                      .removeClass('loading')
                      .removeClass('success')
                      .addClass('add-to-cart')
                      .html(originalText)
                      .prop('disabled', false)
                      .css('pointer-events', 'auto')
                      .removeAttr('style');
                console.log('Reset orphaned button:', originalText);
            }
        });
    }

    // Add item to cart with smooth animation
    addToCart(item) {
        console.log('Adding item to cart:', item);
        console.log('Current cart before adding:', this.cart);
        
        // Ensure item.id is a string for consistent comparison
        const itemId = String(item.id);
        const existingItem = this.cart.find(cartItem => String(cartItem.id) === itemId);
        
        if (existingItem) {
            console.log('Item already exists, increasing quantity from', existingItem.quantity, 'to', existingItem.quantity + 1);
            existingItem.quantity += (item.quantity || 1);
        } else {
            console.log('Adding new item to cart');
            this.cart.push({
                id: itemId,
                name: item.name,
                price: parseFloat(item.price),
                image: item.image || 'images/dish-breakfast-3.png',
                quantity: item.quantity || 1
            });
        }

        console.log('Cart after adding:', this.cart);
        
        this.saveCart();
        this.updateCartBadge();
        this.updateCartSidebar();
        
        // Show success animation
        this.showAddToCartAnimation(item);
        
        // Auto-open cart sidebar for first item
        if (this.cart.length === 1) {
            setTimeout(() => {
                this.openCartSidebar();
            }, 500);
        }
    }

    // Remove item from cart
    removeFromCart(itemId) {
        const itemIdStr = String(itemId);
        this.cart = this.cart.filter(item => String(item.id) !== itemIdStr);
        this.saveCart();
        this.updateCartBadge();
        this.updateCartSidebar();
    }

    // Update item quantity
    updateQuantity(itemId, quantity) {
        const itemIdStr = String(itemId);
        const item = this.cart.find(cartItem => String(cartItem.id) === itemIdStr);
        if (item) {
            if (quantity <= 0) {
                this.removeFromCart(itemId);
            } else {
                item.quantity = quantity;
                this.saveCart();
                this.updateCartBadge();
                this.updateCartSidebar();
            }
        }
    }

    // Update cart badge with animation
    updateCartBadge() {
        const totalItems = this.cart.reduce((sum, item) => sum + item.quantity, 0);
        
        if (totalItems > 0) {
            this.cartBadge.text(totalItems).show();
            
            // Add pulse animation
            this.cartBadge.addClass('cart-badge-pulse');
            setTimeout(() => {
                this.cartBadge.removeClass('cart-badge-pulse');
            }, 600);
        } else {
            this.cartBadge.hide();
        }
    }

    // Update cart sidebar content
    updateCartSidebar() {
        if (this.cart.length === 0) {
            this.cartList.html(`
                <li class="empty-cart">
                    <div class="empty-cart-content">
                        <i class="fa fa-shopping-cart"></i>
                        <h4>Your cart is empty</h4>
                        <p>Add some delicious items to get started!</p>
                    </div>
                </li>
            `);
            this.cartInfo.html(`
                <h4>Item(s) : <span>0</span></h4>
                <h4>Total Price: <span>$0.00</span></h4>
                <a href="menu-grid.php" class="btn btn-black">Browse Menu</a>
            `);
        } else {
            this.renderCartItems();
            this.updateCartSummary();
        }
    }

    // Render cart items in sidebar
    renderCartItems() {
        console.log('Rendering cart items:', this.cart);
        
        const cartItemsHtml = this.cart.map(item => `
            <li class="cart-item-wrapper" data-id="${item.id}">
                <div class="cart-item">
                    <div class="item-text dish-list-text">
                        <h4><a href="#">${item.name}</a></h4>
                        <p>Delicious ${item.name}</p>
                        <h5>Qty: <input type="number" class="form-control cart-quantity" 
                            min="1" value="${item.quantity}" data-id="${item.id}"> x $${item.price.toFixed(2)}</h5>
                    </div>
                    <div class="item-img">
                        <a href="#"><img src="${item.image}" class="img-fluid" alt="${item.name}" /></a>
                    </div>
                    <h4 class="total">Total: <span>$${(item.price * item.quantity).toFixed(2)}</span></h4>
                    <div class="item-close">
                        <button class="btn remove-item" data-id="${item.id}">
                            <span><i class="fa fa-times-circle"></i></span>
                        </button>
                    </div>
                </div>
            </li>
        `).join('');
        
        this.cartList.html(cartItemsHtml);
    }

    // Update cart summary
    updateCartSummary() {
        const totalItems = this.cart.reduce((sum, item) => sum + item.quantity, 0);
        const totalPrice = this.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        
        this.cartInfo.html(`
            <h4>Item(s) : <span>${totalItems}</span></h4>
            <h4>Total Price: <span>$${totalPrice.toFixed(2)}</span></h4>
            <a href="shopping-cart.php" class="btn btn-black">View Cart</a>
            <a href="checkout.php" class="btn btn-orange">Checkout</a>
        `);
    }

    // Show add to cart success animation
    showAddToCartAnimation(item) {
        // Check if item already exists to show appropriate message
        const existingItem = this.cart.find(cartItem => String(cartItem.id) === String(item.id));
        const isNewItem = !existingItem || existingItem.quantity === 1;
        
        // Create floating cart icon animation
        const cartIcon = $('<div class="floating-cart-icon">🛒</div>');
        $('body').append(cartIcon);
        
        // Animate to cart
        cartIcon.css({
            position: 'fixed',
            fontSize: '24px',
            zIndex: 9999,
            pointerEvents: 'none'
        });
        
        // Get button position and cart position
        const button = $(`.add-to-cart[data-id="${item.id}"]`);
        const cartButton = $('#shc-side-open');
        
        if (button.length && cartButton.length) {
            const buttonPos = button.offset();
            const cartPos = cartButton.offset();
            
            cartIcon.css({
                left: buttonPos.left + button.width() / 2,
                top: buttonPos.top + button.height() / 2
            });
            
            // Animate to cart
            cartIcon.animate({
                left: cartPos.left + cartButton.width() / 2,
                top: cartPos.top + cartButton.height() / 2,
                opacity: 0,
                fontSize: '12px'
            }, 800, 'easeInOutQuad', function() {
                cartIcon.remove();
            });
        }
        
        // Show appropriate success message
        if (isNewItem) {
            this.showToast('Item added to cart!', 'success');
        } else {
            this.showToast(`Quantity increased! (${existingItem.quantity} in cart)`, 'success');
        }
    }

    // Show toast notification
    showToast(message, type = 'info') {
        const toast = $(`
            <div class="cart-toast cart-toast-${type}">
                <i class="fa fa-${type === 'success' ? 'check-circle' : 'info-circle'}"></i>
                <span>${message}</span>
            </div>
        `);
        
        $('body').append(toast);
        
        // Position toast
        toast.css({
            position: 'fixed',
            top: '20px',
            right: '20px',
            zIndex: 10000,
            transform: 'translateX(100%)',
            transition: 'transform 0.3s ease'
        });
        
        // Show toast
        setTimeout(() => {
            toast.css('transform', 'translateX(0)');
        }, 100);
        
        // Hide toast
        setTimeout(() => {
            toast.css('transform', 'translateX(100%)');
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    }

    // Open cart sidebar
    openCartSidebar() {
        this.cartSidebar.addClass('to-right-toggle');
        $('.overlay-black').css('visibility', 'visible');
    }

    // Close cart sidebar
    closeCartSidebar() {
        this.cartSidebar.removeClass('to-right-toggle');
        $('.overlay-black').css('visibility', 'hidden');
    }

    // Save cart to localStorage
    saveCart() {
        localStorage.setItem('chachukiCart', JSON.stringify(this.cart));
    }

    // Clear cart
    clearCart() {
        this.cart = [];
        this.saveCart();
        this.updateCartBadge();
        this.updateCartSidebar();
        console.log('Cart cleared');
    }

    // Debug method to log current cart state
    debugCart() {
        console.log('=== CART DEBUG ===');
        console.log('Cart items:', this.cart);
        console.log('Total items:', this.cart.reduce((sum, item) => sum + item.quantity, 0));
        console.log('Cart length:', this.cart.length);
        console.log('==================');
    }

    // Bind events
    bindEvents() {
        // Quantity change in sidebar
        $(document).on('change', '.cart-quantity', (e) => {
            const itemId = $(e.target).data('id');
            const quantity = parseInt($(e.target).val());
            this.updateQuantity(itemId, quantity);
        });

        // Remove item from sidebar
        $(document).on('click', '.remove-item', (e) => {
            const itemId = $(e.target).closest('.remove-item').data('id');
            this.removeFromCart(itemId);
            
            // Add slide out animation
            const item = $(e.target).closest('.cart-item-wrapper');
            item.addClass('slide-out');
            setTimeout(() => {
                this.updateCartSidebar();
            }, 300);
        });

        // Add to cart button clicks - FIXED VERSION
        $(document).on('click', '.add-to-cart', (e) => {
            e.preventDefault();
            e.stopPropagation();
            
            const button = $(e.currentTarget); // Use currentTarget instead of target
            const itemId = button.data('id');
            const itemName = button.data('name');
            const itemPrice = button.data('price');
            const itemImage = button.data('image');
            
            // Check if button is already processing
            if (button.hasClass('processing')) {
                console.log('Button already processing, ignoring click');
                return;
            }
            
            console.log('Adding to cart:', itemName, 'Price:', itemPrice);
            
            // Store original button state
            const originalText = button.html();
            const originalClasses = button.attr('class');
            
            // Add loading state
            button.data('original-text', originalText)
                  .data('original-classes', originalClasses)
                  .removeClass('add-to-cart')
                  .addClass('processing')
                  .html('<i class="fa fa-spinner fa-spin"></i> Adding...')
                  .prop('disabled', true)
                  .css('pointer-events', 'none');
            
            // Add to cart
            this.addToCart({
                id: itemId,
                name: itemName,
                price: itemPrice,
                image: itemImage
            });
            
            // Reset button after animation with multiple fallbacks
            const resetButton = () => {
                console.log('Resetting button to:', originalText);
                
                // Force reset all states
                button.removeClass('processing')
                      .addClass('add-to-cart')
                      .html(originalText)
                      .prop('disabled', false)
                      .css('pointer-events', 'auto')
                      .removeAttr('style');
                
                // Additional cleanup
                button.removeClass('loading');
                button.removeClass('success');
                
                console.log('Button reset complete');
            };
            
            // Primary reset after animation
            setTimeout(resetButton, 1500);
            
            // Fallback reset after 3 seconds (in case primary fails)
            setTimeout(resetButton, 3000);
            
            // Emergency reset after 5 seconds
            setTimeout(resetButton, 5000);
        });
    }
}

// Initialize cart manager when document is ready
$(document).ready(function() {
    window.cartManager = new CartManager();
    
    // Add global debug methods
    window.debugCart = function() {
        window.cartManager.debugCart();
    };
    
    window.clearCart = function() {
        window.cartManager.clearCart();
    };
    
    window.showCart = function() {
        window.cartManager.openCartSidebar();
    };
    
    window.resetAllButtons = function() {
        window.cartManager.resetStuckButtons();
    };
    
    // Auto-reset stuck buttons every 10 seconds as a safety measure
    setInterval(function() {
        window.cartManager.resetStuckButtons();
    }, 10000);
});

// Add CSS for animations
const cartStyles = `
<style>
/* Cart Badge Pulse Animation */
.cart-badge-pulse {
    animation: cartPulse 0.6s ease-in-out;
}

@keyframes cartPulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.3); }
    100% { transform: scale(1); }
}

/* Floating Cart Icon Animation */
.floating-cart-icon {
    background: #FF6B35;
    color: white;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(255, 107, 53, 0.4);
}

/* Toast Notifications */
.cart-toast {
    background: white;
    border-radius: 8px;
    padding: 15px 20px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 300px;
    border-left: 4px solid #FF6B35;
}

.cart-toast-success {
    border-left-color: #28a745;
}

.cart-toast-success i {
    color: #28a745;
}

.cart-toast-info i {
    color: #FF6B35;
}

/* Empty Cart Styling */
.empty-cart {
    text-align: center;
    padding: 40px 20px;
}

.empty-cart-content i {
    font-size: 48px;
    color: #ccc;
    margin-bottom: 15px;
}

.empty-cart-content h4 {
    color: #666;
    margin-bottom: 10px;
}

.empty-cart-content p {
    color: #999;
    font-size: 14px;
}

/* Cart Item Slide Out Animation */
.cart-item-wrapper.slide-out {
    animation: slideOut 0.3s ease-out forwards;
}

@keyframes slideOut {
    from {
        transform: translateX(0);
        opacity: 1;
    }
    to {
        transform: translateX(-100%);
        opacity: 0;
    }
}

/* Cart Quantity Input Styling */
.cart-quantity {
    width: 60px !important;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 4px 8px;
}

/* Remove Item Button Hover */
.remove-item:hover {
    background: #dc3545 !important;
    color: white !important;
}

/* Add to Cart Button Loading State */
.add-to-cart:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}
</style>
`;

// Inject styles
$('head').append(cartStyles); 