const response = await fetch("/lib/rank.json");
const json = await response.json();
export default json;