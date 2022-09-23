const TESTING = el('h1')

// TODO: TESTING
const test = e => e.target.style.backgroundColor = 'black' // e : event

TESTING.addEventListener('mouseenter', test)
console.log(TESTING)