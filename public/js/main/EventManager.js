/**
 * Менеджер событий AseJSApplication
 */
class EventManager extends Service {
    /**
     * Возвращает имя события выполняемого после загрузке приложения
     *
     * @returns {string}
     */
    static documentReadyEventName() {
        return 'documentReady'
    }

    /**
     * Конструктор EventManager
     */
    constructor(options = {}) {
        super(options);

        this.events = {};
    }

    /**
     * Добавляем callbacks к событиюям
     *
     * @param events {*}
     */
    bindEvents(events) {
        let manager = this;

        $.each(events, function (eventName, callback) {
            manager.bindEvent(eventName, callback);
        });
    }

    /**
     * Добавляем callback к событию
     *
     * @param eventName
     * @param callback
     */
    bindEvent(eventName, callback) {
        if(!(eventName in this.events)) {
            this.events[eventName] = [];
        }

        this.events[eventName].push(callback);
    }

    /**
     * Метод иницимализирующий событие и выполняющий callbacks для него
     *
     * @param eventName
     */
    triggerEvent(eventName) {
        $.each(this.events[eventName], function (id, event) {
            event();
        })
    }

    /**
     * @inheritDoc
     */
    getServiceName() {
        return 'eventManager';
    }
}
