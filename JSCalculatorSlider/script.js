class FunCulator {
    constructor(previous_result_element, current_result_element) {
        this.previous_result_element = previous_result_element
        this.current_result_element = current_result_element
        this.allClear()
        this.hasDot = false
    }

    allClear() {
        this.current_result = ""
        this.previous_result_element.innerText = ""
    }

    cleanCurrent() {
        this.current_result = ''
    }

    delete() {
        this.current_result = this.current_result.toString().slice(0, -1)
    }


    addNumberOnScreen(number) {
        const lastSign = this.current_result.toString()[this.current_result.length - 1]
        if (number === '.' && this.isOperation(lastSign)) {
            return
        }
        if (number === '.' && !(this.current_result.length)) {
            return
        }
        if (number === "." && this.hasDot) {
            return
        }
        if (number === '.' && !(this.hasDot)) {
            this.hasDot = true
        }
        this.current_result = this.current_result.toString() + number.toString()
    }

    chooseOperation(operation) {
        const lastSign = this.current_result.toString()[this.current_result.length - 1]
        const firstSign = this.current_result.toString()[0]
        // 7.+ 2- 8. => 7.0 + 2 - 8.0
        if (lastSign === '.') {
            this.current_result = this.current_result.toString() + "0"
        }
        // + 8 - 2 /
        if (this.isOperation(firstSign) || this.isOperation(lastSign)) {
            return
        }
        // - 5 + 2 -
        if (this.isMinus(lastSign))
            return
        // --
        if (this.isMinus(operation) && this.isMinus(lastSign))
            return
        this.hasDot = false
        this.current_result = this.current_result.toString() + operation.toString()
    }

    isOperation(sign) {
        return sign === "+" || sign === "*" || sign === "÷" || sign === "/";
    }

    isMinus(sign) {
        return sign === "-"
    }

    isDot(sign) {
        return sign === "."
    }

    calculateValue() {
        this.previous_result_element.innerText = this.current_result
        const lastSign = this.current_result.toString()[this.current_result.length - 1]
        const firstSign = this.current_result.toString()[0]
        //
        if (!(this.current_result)) {
            return
        }
        // 7.+ 2- 8. => 7.0 + 2 - 8.0
        if (this.isDot(lastSign)) {
            this.current_result = this.current_result.toString() + "0"
            this.previous_result_element.innerText = this.current_result
        }
        // + 8 - 9
        if (this.isOperation(firstSign)) {
            return
        }
        // - 6 - + 2 /
        if (this.isOperation(lastSign) || this.isMinus(lastSign)) {
            this.delete()
            this.previous_result_element.innerText = this.current_result
        }
        const final_result = this.current_result.replaceAll("÷", "/")
        this.current_result = eval(final_result)
    }

    updateOnResults() {
        const firstSign = this.current_result.toString()[0]
        //
        if (this.isOperation(firstSign) && this.current_result.length === 1) {
            this.current_result = ''
        } else {
            this.current_result_element.innerText = this.current_result
        }
    }
}

const previous_result_element = document.querySelector('[data-previous-result-event]')
const current_result_element = document.querySelector('[data-current-result-event]')
const all_clear_button = document.querySelector('[data-all-clear-event]')
const clear_button = document.querySelector('[data-clear-event]')
const delete_element_button = document.querySelector('[data-delete-event]')
const numbers_buttons = document.querySelectorAll('[data-number-event]')
const operations_buttons = document.querySelectorAll('[data-operation-event]')
const result_button = document.querySelector('[data-result-event]')

const funculator = new FunCulator(previous_result_element, current_result_element)

result_button.addEventListener('click', button => {
    funculator.calculateValue()
    funculator.updateOnResults()
})

all_clear_button.addEventListener('click', button => {
    funculator.allClear()
    funculator.updateOnResults()
})

clear_button.addEventListener('click', button => {
    funculator.cleanCurrent()
    funculator.updateOnResults()
})

delete_element_button.addEventListener('click', button => {
    funculator.delete()
    funculator.updateOnResults()
})

numbers_buttons.forEach(button => {
    button.addEventListener('click', () => {
        funculator.addNumberOnScreen(button.innerText)
        funculator.updateOnResults()
    })
})

operations_buttons.forEach(button => {
    button.addEventListener('click', () => {
        funculator.chooseOperation(button.innerText)
        funculator.updateOnResults()
    })
})

