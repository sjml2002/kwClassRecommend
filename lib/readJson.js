const response = await fetch("/lib/rank.json");
const json = await response.json();
console.log(json);
export default json;