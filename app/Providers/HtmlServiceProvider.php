<?php

namespace App\Providers;

use App\Extensions\Html\BootstrapForm;
use App\Extensions\Html\Form;
use App\Extensions\Html\Html;
use Collective\Html\HtmlServiceProvider as BaseHtmlServiceProvider;

class HtmlServiceProvider extends BaseHtmlServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerHtmlBuilder();

        $this->registerFormBuilder();

        $this->registerBootstrapFormBuilder();

        $this->app->alias('html', Html::class);
        $this->app->alias('form', Form::class);
        $this->app->alias('bootstrapForm', BootstrapForm::class);

        $this->registerBladeDirectives();
    }

    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->singleton('html', function ($app) {
            return new Html($app['url'], $app['view']);
        });
    }

    /**
     * Register the form builder instance.
     *
     * @return void
     */
    protected function registerFormBuilder()
    {
        $this->app->singleton('form', function ($app) {
            $form = new Form($app['html'], $app['url'], $app['view'], $app['session.store']->token(), $app['request']);

            return $form->setSessionStore($app['session.store']);
        });
    }

    protected function registerBootstrapFormBuilder()
    {
        $this->app->singleton('bootstrapForm', function ($app) {
            $form = new BootstrapForm($app['html'], $app['url'], $app['view'], $app['session.store']->token(), $app['request']);

            return $form->setSessionStore($app['session.store']);
        });
    }
}