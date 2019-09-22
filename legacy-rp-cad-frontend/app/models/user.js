import DS from 'ember-data';

export default DS.Model.extend({

    /**
     * Unique account id gotten from steam.
     */
    accountId: DS.attr('string'),

    /**
     * A HEX-ified version of "accountId" with a special prefix.
     */
    identifier: DS.attr('string'),

    /**
     * The profile name.
     */
    name: DS.attr('string'),

    /**
     * URI to profile picture (avatar).
     */
    avatar: DS.attr('string'),

});
