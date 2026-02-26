<?php get_header(); ?>

<section class="hero">
    <h1>Welcome to BYS Store</h1>
    <p>Find the best products for your dropshipping business</p>
    <a href="#products" class="btn">Browse Products</a>
</section>

<main id="products">
    <div class="products-grid">
        <?php foreach (bys_get_products() as $product): ?>
        <div class="product-card">
            <h3><?php echo esc_html($product['name']); ?></h3>
            <div class="price">$<?php echo number_format($product['price'], 2); ?></div>
            <p class="description">Product Description: <?php echo esc_html($product['description']); ?></p>
            <button class="btn-cart" onclick="addToCart(<?php echo $product['id']; ?>)">
                Add to Cart
            </button>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<footer>
    <p>© 2024 BYS Store. All rights reserved. Free shipping on orders over $50.</p>
</footer>

<script>
function addToCart(productId) {
    alert('Added to Cart! (Product ID: ' + productId + ')');
}
</script>

<?php wp_footer(); ?>
</body>
</html>
