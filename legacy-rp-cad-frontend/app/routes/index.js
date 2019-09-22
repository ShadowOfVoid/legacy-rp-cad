import Route from '@ember/routing/route';
import UnauthenticatedRouteMixin from 'ember-simple-auth/mixins/unauthenticated-route-mixin';
import OAuth2ImplicitGrantCallbackRouteMixin from 'ember-simple-auth/mixins/oauth2-implicit-grant-callback-route-mixin';

/**
 * Route to login with steam.
 */
export default Route.extend(UnauthenticatedRouteMixin, OAuth2ImplicitGrantCallbackRouteMixin, {

    /**
     * The route to transition to if already authenticated.
     */
    routeIfAlreadyAuthenticated: 'cad',

    /**
     * The authenticator to use for the oauth2 implicit grant.
     */
    authenticator: 'authenticator:oauth2',

});