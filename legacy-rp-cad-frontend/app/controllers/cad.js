import Controller from '@ember/controller';
import { inject as service } from '@ember/service';

/**
 * The application controller.
 */
export default Controller.extend({

    session:     service(),
    currentUser: service(),

    actions: {
        /**
         * Logs the user out by invalidating the current session.
         */
        logout() {
            this.session.invalidate();
        }
    }

});
