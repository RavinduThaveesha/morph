const fs = require("fs");

// Function to read data from file and parse to JSON
function readData() {
    console.log("reading data..");
    const data = fs.readFileSync("data.json");
    return JSON.parse(data);
}

// Function to return items where gender = non-male
function filterNonMale() {
    console.log("items where gender = non-male");
    const data = readData();
    return data.filter((item) => item.Gender !== "male");
}

// Function to return items where jedi = yes
function filterJedi() {
    console.log("items where jedi = yes");
    const data = readData();
    return data.filter((item) => item.Jedi === "yes");
}

// Function to calculate average skill level across all items where jedi = yes
function calculateAverageSkillLevel() {
    console.log("average skill level across all items where jedi = yes");
    const data = filterJedi();
    const totalSkillLevel = data.reduce(
        (accumulator, item) => accumulator + parseInt(item.Skill), 0
    );
    const averageSkillLevel = totalSkillLevel / data.length;
    return averageSkillLevel;
}

// Function to add a new entry into data.json
function addNewEntry() {
    console.log("adding new data..");
    const data = readData();
    const newEntry = {
        Name: "Palpatine",
        Gender: "male",
        Homeworld: "Naboo",
        Born: "82BBY",
        Jedi: "no",
        Skill: "8",
    };
    data.push(newEntry);
    fs.writeFileSync("data.json", JSON.stringify(data, null, 2));
}

// Example usage
console.log(filterNonMale()); // items where gender = non-male
console.log(filterJedi()); // items where jedi = yes
console.log(calculateAverageSkillLevel()); // average skill level across all items where jedi = yes

addNewEntry(); // add a new entry into data.json
