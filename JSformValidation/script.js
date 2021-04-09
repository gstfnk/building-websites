function addError(input, errorMessage) {
    const formControl = input.closest(".form-control")
    formControl.classList.remove("success")

    const small = formControl.querySelector('small')
    small.innerText = errorMessage

    if (!formControl.classList.contains("error")) {
        formControl.classList.add("error")
    }
}

function addErrorPassword(input) {
    const formControl = input.closest(".form-control")
    formControl.classList.remove("success")

    if (!formControl.classList.contains("error")) {
        formControl.classList.add("error")
    }
}

function addSuccess(input) {
    const formControl = input.closest(".form-control")
    formControl.classList.remove("error")

    if (!formControl.classList.contains("success")) {
        formControl.classList.add("success")
    }
}

function validateMinLength(min, input) {
    const value = input.value

    if (value.length < min) {
        addError(input, "Wartość krótsza niż " + min)
        return false
    }

    return true
}

function validateMinLengthPassword(min, input) {
    const value = input.value

    if (value.length < min) {
        addErrorPassword(input)
        return false
    }

    return true
}

function validateMaxLength(max, input) {
    const value = input.value

    if (value.length > max) {
        input.value = value.substr(0, max)
        return false
    }

    return true
}

function validateRegex(regex, input, errorMessage) {
    const value = input.value.trim()

    if (!value.match(regex)) {
        addError(input, errorMessage)
        return false
    }

    return true
}

function checkPasswordStrength(input) {
    let complexity = 0
    const regArray = [
        /[A-Z]/,
        /[a-z]/,
        /[0-9]/,
        /.{8}/,
        /.{12}/,
        /[!-//:-@[-`{-ÿ]/
    ];

    regArray.forEach(function (reg) {
        if (reg.test(input)) {
            complexity++;
        }
    })

    return {
        value: complexity,
        max: regArray.length
    }
}

function passwordProgress() {
    const progress = document.getElementById('passwordProgress')
    const complexity = checkPasswordStrength(this.value)

    progress.value = complexity.value
    progress.max = complexity.max
}

function validateAll() {
    const validationArray = [validateName(), validateSurname(), validateCityName(), validateStreetName(),
        validateBuildingNumber(), validateFlatNumber(), validateTelephoneNumber(), validatePassword()]
    return !validationArray.includes(false);
}

const registerForm = document.getElementById('funClubForm')
const name = document.getElementById('name')
const surname = document.getElementById('surname')
const cityName = document.getElementById('city-name')
const postalCode = document.getElementById('postal-code')
const streetName = document.getElementById('street-name')
const buildingNumber = document.getElementById('building-number')
const flatNumber = document.getElementById('flat-number')
const telephoneNumber = document.getElementById('telephone-number')
const password = document.getElementById('password')
const feedback = document.getElementById('feedback')

function validateName() {
    if (!validateMinLength(3, name)) {
        return false
    }
    if (!validateMaxLength(20, name)) {
        return false
    }
    if (!validateRegex(/^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ-]+$/, name, "Dozwolone tylko litery!")) {
        return false
    }
    addSuccess(name)
    return true
}

name.addEventListener('keyup', validateName)

function validateSurname() {
    if (!validateMinLength(3, surname)) {
        return false
    }
    if (!validateMaxLength(20, surname)) {
        return false
    }
    if (!validateRegex(/^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ-]+$/, surname, "Dozwolone tylko litery!")) {
        return false
    }
    addSuccess(surname)
    return true
}

surname.addEventListener('keyup', validateSurname)

function validateCityName() {
    if (!validateMinLength(3, cityName)) {
        return false
    }
    if (!validateMaxLength(20, streetName)) {
        return false
    }
    if (!validateRegex(/^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ-]+$/, cityName, "Nieprawidłowe znaki!")) {
        return false
    }
    addSuccess(cityName)
    return true
}

cityName.addEventListener('keyup', validateCityName)

function validatePostalCode() {
    if (!validateRegex(/^\d{2}-\d{3}$/, postalCode, "Tylko cyfry CC-CCC!")) {
        return false
    }
    addSuccess(postalCode)
    return true
}

postalCode.addEventListener('keyup', validatePostalCode)

function validateStreetName() {
    if (!validateMinLength(3, streetName)) {
        return false
    }
    if (!validateMaxLength(40, streetName)) {
        return false
    }
    addSuccess(streetName)
    return true
}

streetName.addEventListener('keyup', validateStreetName)

function validateBuildingNumber() {
    if (!validateMinLength(1, buildingNumber)) {
        return false
    }
    if (!validateMaxLength(10, buildingNumber)) {
        return false
    }
    if (!validateRegex(/^\d+[A-Za-z]?$/, buildingNumber, "Nieprawidłowe znaki!")) {
        return false
    }
    addSuccess(buildingNumber)
    return true
}

buildingNumber.addEventListener('keyup', validateBuildingNumber)

function validateFlatNumber() {
    if (flatNumber.value === "") {
        addSuccess(flatNumber)
        return false
    }
    if (!validateMinLength(0, flatNumber)) {
        return false
    }
    if (!validateMaxLength(10, flatNumber)) {
        return false
    }
    if (!validateRegex(/^\d+$/, flatNumber, "Nieprawidłowe znaki!")) {
        return false
    }
    addSuccess(flatNumber)
    return true
}

flatNumber.addEventListener('keyup', validateFlatNumber)

function validateTelephoneNumber() {
    if (!validateMinLength(9, telephoneNumber)) {
        return false
    }
    if (!validateMaxLength(9, telephoneNumber)) {
        return false
    }
    if (!validateRegex(/^\d+$/, telephoneNumber, "Dozwolone tylko cyfry!")) {
        return false
    }
    addSuccess(telephoneNumber)
    return true
}

telephoneNumber.addEventListener('keyup', validateTelephoneNumber)

function validatePassword() {
    if (!validateMinLengthPassword(8, password)) {
        return false
    }
    if (!validateMaxLength(20, password)) {
        return false
    }
    addSuccess(password)
    return true
}

password.addEventListener('keyup', validatePassword)
password.addEventListener('keyup', passwordProgress)

function validateFeedback() {
    if (!validateMinLength(0, feedback)) {
        return false
    }
    if (!validateMaxLength(250, feedback)) {
        return false
    }
    addSuccess(feedback)
    return true
}

feedback.addEventListener('keyup', validateFeedback)

registerForm.addEventListener('submit', (event) => {
    if (!validateAll()) {
        event.preventDefault()
    }
})