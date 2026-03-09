function sumOddNumbers(min, max) {
    let total = 0;
    
    for (let i = min; i <= max; i++) {
        if (i % 2 !== 0) {
            total += i; 
        }
    }
    
    return total;
}

console.log("min = 1, max = 8, result =", sumOddNumbers(1, 8));   
console.log("min = 4, max = 15, result =", sumOddNumbers(4, 15)); 