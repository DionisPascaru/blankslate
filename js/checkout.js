document.addEventListener('DOMContentLoaded', function () {
    const waitForFields = (selectors, callback, timeout = 5000) => {
        const startTime = Date.now();

        const check = () => {
            const elements = selectors.map(selector => document.querySelector(selector));
            if (elements.every(el => el !== null)) {
                callback(...elements);
            } else if (Date.now() - startTime < timeout) {
                requestAnimationFrame(check);
            } else {
                console.warn('Some checkout fields were not found in time.');
            }
        };

        check();
    };

    waitForFields(['#billing-first_name', '#billing-last_name', '#billing-phone'], (firstName, lastName, phone) => {
        // --- Your validation logic here ---
        const createErrorContainer = (inputEl) => {
            const errorEl = document.createElement('div');
            errorEl.className = 'wc-block-components-validation-error';
            errorEl.style.display = 'none';
            inputEl.parentNode.appendChild(errorEl);
            return errorEl;
        };

        const firstNameError = createErrorContainer(firstName);
        const lastNameError = createErrorContainer(lastName);
        const phoneError = createErrorContainer(phone);

        const validateMinLength = (inputEl, errorEl, minLength, fieldName) => {
            const value = inputEl.value.trim();
            if (value.length < minLength && value.length > 0) {
                errorEl.textContent = `${fieldName} trebuie să aibă cel puțin ${minLength} caractere`;
                errorEl.style.display = 'block';
                return false;
            } else {
                errorEl.textContent = '';
                errorEl.style.display = 'none';
                return true;
            }
        };

        const validatePhone = (inputEl, errorEl) => {
            const value = inputEl.value.trim();
            const pattern = /^\+?\d{8,15}$/;
            if (!pattern.test(value) && value.length > 0) {
                errorEl.textContent = 'Introduceți un număr de telefon valid';
                errorEl.style.display = 'block';
                return false;
            } else {
                errorEl.textContent = '';
                errorEl.style.display = 'none';
                return true;
            }
        };

        const validateAll = () => {
            const isFirstNameValid = validateMinLength(firstName, firstNameError, 3, 'Numele');
            const isLastNameValid = validateMinLength(lastName, lastNameError, 3, 'Prenumele');
            const isPhoneValid = validatePhone(phone, phoneError);
            return isFirstNameValid && isLastNameValid && isPhoneValid;
        };

        [firstName, lastName, phone].forEach(field => {
            field.addEventListener('input', validateAll);
        });

        validateAll();
    });
});
