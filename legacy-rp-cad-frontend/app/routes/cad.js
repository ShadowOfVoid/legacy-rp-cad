import Route from '@ember/routing/route';
import AuthenticatedRouteMixin from 'ember-simple-auth/mixins/authenticated-route-mixin';

/**
 * The CAD entry route.
 */
export default Route.extend(AuthenticatedRouteMixin, {

    /**
     * The route to transition to for authentication.
     */
    authenticationRoute: 'index',

});