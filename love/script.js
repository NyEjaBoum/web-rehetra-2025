const redButton = document.getElementById('redButton');
const greenButton = document.getElementById('greenButton');

const phrases = [
  'tu es sur',
  'vraiment sur?',
  'tena sur ve ndry?',
  'serieusement ve ?',
  'Mba eritrereto tsara ngeh ...',
  'Tovy serieux kosa akia?',
  'tsy mba tia ana ve ndry',
  'mampalahelo lay bandy kely',
  'dia ho celibataire ndray ve zany ',
  'enao angeh tiko eee...',
  'za ne vonona hahasambatra anao e',
  'hidepr zany...',
  'sura e...',
  'merci ty...',
  'reveko be lay fomba fisainana'


];
let index = 0;
let greenButtonSize = 100;

redButton.addEventListener('click', () => {
  index = (index + 1) % phrases.length;
  redButton.textContent = phrases[index];
  greenButtonSize += 20;
  greenButton.style.width = greenButtonSize + 'px';
  greenButton.style.height = greenButtonSize + 'px';
});

greenButton.addEventListener('click', () => {
  window.location = 'page2.php';
});