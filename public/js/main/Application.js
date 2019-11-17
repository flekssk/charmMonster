/**
 * Класс контейнер для JS сервисов
 */
class Application {
    /**
     *
     * @param options {
     *      {
     *          dataContainerSelector: string
     *      }
     * }
     */
    constructor(options = {}) {
        let dataContainerSelector = options.hasOwnProperty('dataContainerSelector')
            ? options.dataContainerSelector
            : '.jsonData';

        this.data = JSON.parse($(dataContainerSelector).html());

        this.bootstrap();
    }

    /**
     * Возвращает интсанс придожения
     *
     * @returns {Application}
     */
    static instance() {
        if (!this.object) {
            this.object = new Application();
        }

        return this.object;
    }

    /**
     * Преинициализация приложения
     */
    bootstrap() {
        this.services = {};
        let eventManager = new EventManager();

        this.bindService(eventManager);
    }

    /**
     * Добавляем сервис в контейнер
     *
     * @param service
     */
    bindService(service) {
        if (!this.isValidService(service)) {
            return;
        }

        this.services[service.getServiceName()] = service;

        let events = service.getEvents();

        if (typeof events == 'object') {
            this.eventManager().bindEvents(events)
        }
    }

    /**
     * Возвращает сервис
     *
     * @param serviceName
     *
     * @returns Service
     */
    getService(serviceName) {
        return this.services[serviceName];
    }

    /**
     * Возвращает сервис событий
     *
     * @returns EventManager|AseJSService
     */
    eventManager() {
        return this.getService('eventManager');
    }

    /**
     * Проверка объекта является ли он сервисом
     *
     * @param service {Service}
     * @returns {boolean}
     */
    isValidService(service) {
        let result = true;

        if (typeof service !== 'object') {
            console.log(service + ' не является объектом, не получается зарегистрировать сервис');
            result = false;

            return result;
        }

        if (!(service instanceof Service)) {
            console.log(service.constructor.name + ' должен быть инстансом Service');

            result = false;
        }
        if (service.getServiceName() === '') {
            console.log(service.constructor.name + ' не определено имя сервиса (добавьте метод getServiceName)');
            result = false;
        }

        return result;
    }

    getData(param) {
        let result = undefined;

        if(this.data.hasOwnProperty(param)) {
            result = this.data[param];
        }

        return result;
    }

    setData(paramName, paramValue) {
        this.data[paramName] = paramValue;
    }
}
