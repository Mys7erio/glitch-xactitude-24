export const wordsOfWisdom = `
Never gonna give you up
Never gonna let you down
Never gonna run around and desert you
Never gonna make you cry
Never gonna say goodbye
Never gonna tell a lie and hurt you
`.split(" ");

import figlet from 'https://cdn.jsdelivr.net/npm/figlet@1.7.0/+esm'

// Example using asynchronous fetch without explicit error handling
fetch('/fonts/Standard.flf')
    .then(response => response.text())
    .then(fontData => {
        figlet.parseFont('Standard', fontData);
    });


export function generateWisdom(wordIndex = 0) {
    // Reset word index to 0 when all words have been used
    if (wordIndex == wordsOfWisdom.length) wordIndex = 0;

    const wisdom = figlet.textSync(wordsOfWisdom[wordIndex]);
    return [wordIndex + 1, wisdom];
}