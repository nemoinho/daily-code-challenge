const User = require("../src/User");
const UserGroup = require("../src/UserGroup");

describe("UserGroup", () => {
    it("should return a User as admin", () => {
        const user = new UserGroup();

        expect(user.getAdmin()).toEqual(jasmine.any(User));
    });
});
