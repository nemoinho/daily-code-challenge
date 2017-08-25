const User = require("./User");

class UserGroup {
    /**
     * @return {Array<User>}
     */
    getUsers() {
        return [];
    }

    /**
     * @return {User}
     */
    getAdmin() {
        return null;
    }
}

module.exports = UserGroup;
