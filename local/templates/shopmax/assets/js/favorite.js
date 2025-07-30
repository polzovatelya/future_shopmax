window.getFavorites = function() {
    const cookieValue = document.cookie
        .split('; ')
        .find(row => row.startsWith('favorites='));

    return cookieValue ? JSON.parse(cookieValue.split('=')[1]) || [] : [];
};

window.setFavorites = function(favorites) {
    document.cookie = `favorites=${JSON.stringify(favorites)}; path=/; max-age=${30*24*60*60}`;
    updateWishlistCounter();
};

window.toggleWishlist = function(productId) {
    let favorites = getFavorites();
    const index = favorites.indexOf(productId);

    if (index === -1) {
        favorites.push(productId);
        console.log('Товар добавлен в избранное:', productId);
    } else {
        favorites.splice(index, 1);
        console.log('Товар удален из избранного:', productId);
    }

    setFavorites(favorites);
    updateButtonState(productId);
};

function updateWishlistCounter() {
    const count = getFavorites().length;
    document.querySelectorAll('.wishlist-count').forEach(el => {
        el.textContent = count;
    });
}

function updateButtonState(productId) {
    const favorites = getFavorites();
    document.querySelectorAll(`.wishlist-btn[data-product-id="${productId}"]`).forEach(btn => {
        btn.textContent = favorites.includes(productId)
            ? 'Remove from wishlist'
            : 'Add to wishlist';
    });
}

// Инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', function() {
    // Обработчики кликов
    document.querySelectorAll('.wishlist-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            if (typeof window.toggleWishlist === 'function') {
                window.toggleWishlist(productId);
            }
        });

        // Инициализация начального состояния
        const productId = btn.dataset.productId;
        updateButtonState(productId);
    });

    // Обновляем счетчик
    updateWishlistCounter();
});