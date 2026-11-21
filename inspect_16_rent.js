const fs = require('fs');
const files = fs.readdirSync(__dirname).filter(f => f.startsWith('delhi-to-') && f.endsWith('-innova-on-rent.php'));

files.forEach(f => {
    const content = fs.readFileSync(f, 'utf8');
    console.log(`\n=================== ${f} ===================`);
    // print top variables
    const topLines = content.split('\n').slice(0, 20).join('\n');
    console.log(topLines);
    
    // search for pricing tables or vehicle cards in file
    const pTableMatch = content.match(/<table[\s\S]*?<\/table>/i);
    if (pTableMatch) {
        console.log('--- Table found: ---');
        console.log(pTableMatch[0].slice(0, 300) + '...');
    }
    
    const cardMatches = content.match(/class="[^"]*pricing[^"]*"[\s\S]*?<\/div>/gi);
    if (cardMatches) {
        console.log('--- Pricing cards found: ---', cardMatches.length);
    }
});
