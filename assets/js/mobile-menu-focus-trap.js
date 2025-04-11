document.addEventListener("DOMContentLoaded", function () {
    function trapFocus(container) {
        const focusableElements = 'a, button, input, textarea, select, [tabindex]:not([tabindex="-1"])';
        const modal = document.getElementById(container);
        let focusableItems = modal.querySelectorAll(focusableElements);
        focusableItems = Array.from(focusableItems); // Convert NodeList to Array

        if (focusableItems.length === 0) return;

        const firstElement = focusableItems[0];
        const lastElement = focusableItems[focusableItems.length - 1];

        function handleTabKey(e) {
            if (e.key === 'Tab') {
                if (e.shiftKey) {
                    // Shift + Tab
                    if (document.activeElement === firstElement) {
                        e.preventDefault();
                        lastElement.focus();
                    }
                } else {
                    // Tab
                    if (document.activeElement === lastElement) {
                        e.preventDefault();
                        firstElement.focus();
                    }
                }
            }

            if (e.key === 'Escape') {
                closeMenu();
            }
        }

        function closeMenu() {
            const modal = document.getElementById("full-screen-menu");
            const triggerButton = document.querySelector('[data-menu-button]'); // Change this to your menu button selector

            modal.style.display = 'none';
            modal.setAttribute('aria-hidden', 'true'); // Hide from screen readers

            // Move focus to the menu button so it's not stuck inside the hidden menu
            if (triggerButton) {
                triggerButton.focus();
            }
        }

        // Event listener for the X button
        const closeButton = document.getElementById("mobile-close");
        if (closeButton) {
            closeButton.addEventListener("click", closeMenu);
        }

        modal.addEventListener('keydown', handleTabKey);

        // Set focus to the first focusable element
        firstElement.focus();
    }

    function observeMenuVisibility() {
        const menu = document.getElementById("full-screen-menu");
        if (!menu) return;

        const observer = new MutationObserver(() => {
            if (window.getComputedStyle(menu).display !== 'none') {
                menu.setAttribute('aria-hidden', 'false'); // Make it visible to screen readers
                trapFocus("full-screen-menu");
            } else {
                menu.setAttribute('aria-hidden', 'true'); // Hide when closed
            }
        });

        observer.observe(menu, { attributes: true, attributeFilter: ["style"] });
    }

    observeMenuVisibility();
});
