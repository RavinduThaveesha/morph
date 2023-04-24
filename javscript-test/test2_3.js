function generateRandomNumber(max) {
    return new Promise(function (resolve, reject) {
        const randomNumber = Math.floor(Math.random() * max);
        if (randomNumber === 0) {
            reject("Fail");
        } else {
            resolve("Success");
        }
    });
}

// call without async/await (test 2)
generateRandomNumber(2)
    .then(function (result) {
        console.log(result);
    })
    .catch(function (error) {
        console.log(error);
    });

// call with async/await (test 3)
async function run() {
    try {
        const result = await generateRandomNumber(2);
        console.log(result);
    } catch (error) {
        console.log(error);
    }
}

run();
