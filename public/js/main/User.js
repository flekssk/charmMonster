class User extends Service {
    /**
     * @param options {{
     *     userId: integer,
     *     authenticateUrl: string,
     * }}
     */
    constructor(options = {}) {
        super(options);
        console.log(options);

        this.userId = options.userId;
        this.authenticateUrl = options.authenticateUrl;

        this.rebindEvents();
    }

    hasUser() {
        return Number.isInteger(this.userId);
    }

    /**
     * @param text Текст передаваемый в порму авторизации
     */
    authenticate(text = '') {
        if (!this.hasUser()) {
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
    }

    rebindEvents() {
        let caller = this;

        $('.authenticate').click(function () {
            caller.authenticate();
        });
    }
}