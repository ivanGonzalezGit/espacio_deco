
String[] titulo = {"R", "e", "g", "y", " ", "E", "s", "p", "a", "c", "i", "o", " ", "D", "e", "c", "o"};
int j = 16;
int currentIndex = 0;
int nextLetterTime = 0;
int letterDelay = 300; // Tiempo en milisegundos entre cada letra

void setup (){
  size(200, 200);
  background(0);
  stroke(255);
  frameRate(5); // Reducir la velocidad de fotogramas por segundo
}

void draw() {
  if (millis() > nextLetterTime && currentIndex < titulo.length) {
    text(titulo[currentIndex], j, 150);
    j += 10;
    currentIndex++;
    nextLetterTime = millis() + letterDelay;
  }
}
