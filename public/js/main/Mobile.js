class Mobile extends Service{
    constructor(options = {}) {
        super();
    }

    bootstrap() {
        let object = this;
        $('.menuButton').click(function () {
            object.toggleMenu();
        })
    }

    toggleMenu() {
        $('.topMenuContainer').toggle();
    }
}