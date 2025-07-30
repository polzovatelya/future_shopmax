document.addEventListener('DOMContentLoaded', function() {
    // Элементы поиска
    const searchOpenBtn = document.querySelector('.js-search-open');
    const searchCloseBtn = document.querySelector('.js-search-close');
    const searchWrap = document.querySelector('.search-wrap');
    const searchInput = document.getElementById(window.searchParams.inputId);

    // Инициализация поиска
    if (window.JCTitleSearch && searchInput) {
        new JCTitleSearch({
            AJAX_PAGE: window.searchParams.ajaxUrl,
            CONTAINER_ID: window.searchParams.containerId,
            INPUT_ID: window.searchParams.inputId,
            MIN_QUERY_LEN: 2
        });
    }

    // Открытие/закрытие поиска
    if (searchOpenBtn && searchCloseBtn && searchWrap) {
        searchOpenBtn.addEventListener('click', function(e) {
            e.preventDefault();
            searchWrap.classList.add('active');
            searchInput.focus();
        });

        searchCloseBtn.addEventListener('click', function(e) {
            e.preventDefault();
            searchWrap.classList.remove('active');
            searchInput.value = '';
            const suggestions = document.getElementById(window.searchParams.containerId);
            if (suggestions) suggestions.innerHTML = '';
        });
    }

    // Очистка поля поиска при нажатии Esc
    if (searchInput) {
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                searchInput.value = '';
                const suggestions = document.getElementById(window.searchParams.containerId);
                if (suggestions) suggestions.innerHTML = '';
            }
        });
    }



});
