class User extends Service {
    /**
     * @param options {{
     *     userId: integer,
     *     authenticateUrl: string,
     * }}
     */
    constructor(options = {}) {
        super(options);

        this.userId = options.userId;
        this.authenticateUrl = options.authenticateUrl;

        this.rebindEvents();
    }

    hasUser() {
        return Number.isInteger(this.userId);
    }

    /**
     * @param text Текст передаваемый в форму авторизации
     */
    authenticate(text = '') {
        $.ajax({
                url: this.authenticateUrl,
                method: 'get',
                data: {
                    text: text
                },
                dataType: 'json',
                success: function (response) {
                    popup().showContent(response.content);
                }
            }
        );
    }

    userInfo() {

    }

    rebindEvents() {
        let caller = this;
        $('.user').unbind();
        $('.user').click(function () {
            caller.authenticate();
        });
    }
}