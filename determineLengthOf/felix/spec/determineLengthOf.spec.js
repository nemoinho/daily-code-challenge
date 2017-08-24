const determineLengthOf = require('..');

describe("determineLengthOf", () => {
    it("should determine the length of 0 on an empty array", () => {
        const emptyArray = [];
        const length = determineLengthOf(emptyArray);
        expect(length).toBe(emptyArray.length);
    });

    it("should determine the length an array full of numbers", () => {
        const arrayOfNumbers = [1,2,3];
        const length = determineLengthOf(arrayOfNumbers);
        expect(length).toBe(arrayOfNumbers.length);
    });

    it("should determine the length of an array full of zeros", () => {
        const arrayOfZeros = [0,0,0];
        const length = determineLengthOf(arrayOfZeros);
        expect(length).toBe(arrayOfZeros.length);
    });

    it("should determine the length of an array full of strings", () => {
        const arrayOfStrings = ["a", "b"];
        const length = determineLengthOf(arrayOfStrings);
        expect(length).toBe(arrayOfStrings.length);
    });

    it("should determine the length of an array full of empty strings", () => {
        const arrayOfEmptyStrings = ["", ""];
        const length = determineLengthOf(arrayOfEmptyStrings);
        expect(length).toBe(arrayOfEmptyStrings.length);
    });

    it("should determine the given length of a constructed array", () => {
        const constructedArray = new Array(10);
        const length = determineLengthOf(constructedArray);
        expect(length).toBe(constructedArray.length);
    });

    it("should determine the length of an array full of undefined", () => {
        const arrayOfUndefined = [undefined, undefined, undefined, undefined];
        const length = determineLengthOf(arrayOfUndefined);
        expect(length).toBe(arrayOfUndefined.length);
    });

    it("should determine the length of an array filled with null's", () => {
        const arrayOfNulls = [null, null, null, null];
        const length = determineLengthOf(arrayOfNulls);
        expect(length).toBe(arrayOfNulls.length);
    });

    it("should determine the number of commas on an array full of empty spots", () => {
        const arrayOfEmptySpots = [,,,];
        const length = determineLengthOf(arrayOfEmptySpots);
        expect(length).toBe(arrayOfEmptySpots.length);
    });

    it("should determine the number of commas on an array ending with empty spots", () => {
        const arrayEndingWithEmptySpots = [1,2,,,];
        const length = determineLengthOf(arrayEndingWithEmptySpots);
        expect(length).toBe(arrayEndingWithEmptySpots.length);
    });
});
