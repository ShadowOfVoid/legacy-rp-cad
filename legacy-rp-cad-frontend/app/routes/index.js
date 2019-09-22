import Route from '@ember/routing/route';
import UnauthenticatedRouteMixin from 'ember-simple-auth/mixins/unauthenticated-route-mixin';

/**
 * Route to login with steam.
 */
export default Route.extend(UnauthenticatedRouteMixin, {

    /**
     * The route to transition to if already authenticated.
     */
    routeIfAlreadyAuthenticated: 'cad',

});