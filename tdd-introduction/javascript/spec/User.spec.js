const User = require("../src/User");

describe("User", () => {
    it("should return a string as nickname", () => {
        const user = new User();

        expect(user.getNickname()).toEqual(jasmine.any(String));
    });
});
