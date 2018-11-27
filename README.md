# Suomalaisten pankkien käyttämän viitenumeron luonti

Tuspen kauppaa kehittäessä tuli vastaan tarve tehdä laskuihin viitenumeroita automaattisesti,
mutta niitä ei voi generoida täysin satunnaisista numeroista vaan viimeinen numero pitää olla
viitteen tarkastusnumero.

Jostain tuntemattomasta syystä pankit ovat päättäneet, että maagiset tarkastuksessa käytettävät
numerot ovat 1, 3 ja 7. Näillä numeroilla pitää kertoa viitenumeron kaikki numerot ja tulokset
pitää laskea yhteen.

Viitenumero:
123456

Kertolaskut:
1 x 1 = 1, 2 x 3 = 6, 3 x 7 = 21, 4 x 1 = 4, 5 x 3 = 15, 6 x 7 = 42.

Yhteissumma:
1 + 6 + 21 + 4 + 15 + 42 = 89

Lähin kymmenen miinus yhteissumma:
90 - 89 = 1

Uusi toimiva viitenumero:
1234561

Jostain syystä emme saaneet nelinumeroista viitenumeroa toimimaan aina,
mutta kuusinumeroinen luku toimii aina.
