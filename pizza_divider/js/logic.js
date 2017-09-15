class pzzDivider {
    constructor() {
    }
    init() {
        this.fixHeight();
        this.addHandler();
    }
    fixHeight() {
        let body = document.body;
        body.style.overflow = "hidden";
        body.style.height = document.documentElement.clientHeight + 'px';
        body.addEventListener('resize', () => {
            document.body.style.height = document.documentElement.clientHeight + 'px';
        });
    }
    addHandler() {
        document.addEventListener('change', inputChange);
        //document.getElementById('main-form').addEventListener('submit', formSubmit);
        function inputChange(event) {
            if (event.target.tagName != 'INPUT')
                return;
            let input = event.target;
            switch (input.name) {
                case 'who':
                    break;
                case 'what':
                    break;
                case 'how':
                    break;
                default:
                    break;
            }
        }
        /*function formSubmit(event){

        }*/
    }
}
//# sourceMappingURL=logic.js.map