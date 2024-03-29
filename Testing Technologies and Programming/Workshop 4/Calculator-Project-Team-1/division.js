function division(n1, n2) {
    if (n2 === 0) {
        throw new Error("Zero cannot be divided sorry :(");
    }
    let result = n1 / n2;
    return result;
}

export default division;
