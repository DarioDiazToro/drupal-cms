class AccessibilityToolbar {
    constructor() {
        this.toolbar = document.querySelector('.accessibility-toolbar');
        this.toggleButton = document.querySelector('.accessibility-toggle');
        if (!this.toolbar || !this.toggleButton) return;

        this.fontSizeStep = parseInt(localStorage.getItem('fontSizeStep')) || 0;
        this.MAX_STEPS = 3;
        this.isVisible = false;

        // Aplicar colores del toolbar
        const toolbarColor = this.toolbar.getAttribute('data-toolbar-color');
        const textColor = this.toolbar.getAttribute('data-text-color');
        const iconColor = this.toolbar.getAttribute('data-icon-color');
        const buttonColor = this.toolbar.getAttribute('data-button-color');
        
        if (toolbarColor) {
            this.toolbar.style.backgroundColor = toolbarColor;
            // Aplicar también al botón de toggle
            if (this.toggleButton) {
                this.toggleButton.style.backgroundColor = toolbarColor;
            }
        }

        if (textColor) {
            // Aplicar color de texto a todos los spans dentro de botones
            this.toolbar.querySelectorAll('button span').forEach(span => {
                span.style.color = textColor;
            });
        }

        if (iconColor) {
            // Aplicar color a los iconos (pseudo-elementos)
            const style = document.createElement('style');
            style.textContent = `
                .accessibility-toolbar button::before {
                    background-color: ${iconColor} !important;
                }
            `;
            document.head.appendChild(style);
        }

        if (buttonColor) {
            // Aplicar color de fondo a los botones de la lista y al toggle
            const style = document.createElement('style');
            style.textContent = `
                .accessibility-toolbar .accessibility-button,
                .accessibility-toolbar .accessibility-toggle {
                    background-color: ${buttonColor} !important;
                }
            `;
            document.head.appendChild(style);
        }

        this.init();
    }

    init() {
        this.setupEventListeners();
        this.loadSavedStates();
        this.updateButtonStates();
        this.toolbar.setAttribute('data-processed', 'accessibilityProcessed');
    }

    loadSavedStates() {
        // Cargar contraste alto
        if (localStorage.getItem('highContrast') === 'true') {
            document.body.classList.add('high-contrast');
            this.toolbar.querySelector('.accessibility-button.contrast')?.classList.add('active');
        }

        // Cargar escala de grises
        if (localStorage.getItem('grayscale') === 'true') {
            document.body.classList.add('grayscale');
            this.toolbar.querySelector('.accessibility-button.grayscale')?.classList.add('active');
        }

        // Aplicar tamaño de fuente guardado
        if (this.fontSizeStep !== 0) {
            this.adjustFontSize(2.5 * this.fontSizeStep);
        }
    }

    setupEventListeners() {
        // Toggle button click
        this.toggleButton.addEventListener('click', () => {
            this.isVisible = !this.isVisible;
            this.toggleButton.classList.toggle('active');
            
            if (this.isVisible) {
                this.toolbar.classList.remove('accessibilityBlock--hidden');
                this.toolbar.classList.add('accessibilityBlock--visible');
            } else {
                this.toolbar.classList.remove('accessibilityBlock--visible');
                this.toolbar.classList.add('accessibilityBlock--hidden');
            }
        });

        // Eventos de los botones
        this.toolbar.querySelector('.accessibility-button.contrast')?.addEventListener('click', () => {
            document.body.classList.toggle('high-contrast');
            document.body.classList.remove('grayscale');
            this.toolbar.querySelector('.accessibility-button.contrast')?.classList.toggle('active');
            this.toolbar.querySelector('.accessibility-button.grayscale')?.classList.remove('active');
            localStorage.setItem('highContrast', document.body.classList.contains('high-contrast'));
            localStorage.setItem('grayscale', 'false');
        });

        this.toolbar.querySelector('.accessibility-button.grayscale')?.addEventListener('click', () => {
            document.body.classList.toggle('grayscale');
            document.body.classList.remove('high-contrast');
            this.toolbar.querySelector('.accessibility-button.grayscale')?.classList.toggle('active');
            this.toolbar.querySelector('.accessibility-button.contrast')?.classList.remove('active');
            localStorage.setItem('grayscale', document.body.classList.contains('grayscale'));
            localStorage.setItem('highContrast', 'false');
        });

        this.toolbar.querySelector('.accessibility-button.increase')?.addEventListener('click', () => {
            if (this.fontSizeStep < this.MAX_STEPS) {
                this.adjustFontSize(2.5);
                this.fontSizeStep++;
                localStorage.setItem('fontSizeStep', this.fontSizeStep);
                this.updateButtonStates();
            }
        });

        this.toolbar.querySelector('.accessibility-button.decrease')?.addEventListener('click', () => {
            if (this.fontSizeStep > -this.MAX_STEPS) {
                this.adjustFontSize(-2.5);
                this.fontSizeStep--;
                localStorage.setItem('fontSizeStep', this.fontSizeStep);
                this.updateButtonStates();
            }
        });

        this.toolbar.querySelector('.accessibility-button.reset')?.addEventListener('click', () => {
            this.resetFontSizes();
        });
    }

    updateButtonStates() {
        const increaseButton = this.toolbar.querySelector('.accessibility-button.increase');
        const decreaseButton = this.toolbar.querySelector('.accessibility-button.decrease');
        
        if (increaseButton) {
            increaseButton.disabled = this.fontSizeStep >= this.MAX_STEPS;
        }
        if (decreaseButton) {
            decreaseButton.disabled = this.fontSizeStep <= -this.MAX_STEPS;
        }
    }

    adjustFontSize(increment) {
        document.body.querySelectorAll('*:not(script):not(style)').forEach(element => {
            const currentSize = parseFloat(window.getComputedStyle(element).fontSize);
            element.style.fontSize = (currentSize + increment) + 'px';
        });
    }

    resetFontSizes() {
        localStorage.clear();
        window.location.reload();
    }
}

// Inicializar el toolbar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    if (!document.querySelector('.accessibility-toolbar[data-processed="accessibilityProcessed"]')) {
        new AccessibilityToolbar();
    }
});
