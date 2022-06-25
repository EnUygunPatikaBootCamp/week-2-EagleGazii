### Soru 1: Pascal case ve camel case farklılığı ?
Pascal case ve camel case ikisi yazılımda 
adlandırma uzlaşımı (naming conventions), 
arasındaki büyük farklılık yoktur,

**Pascal case** -  bir değişkendeki her bir bileşik kelimenin ilk harfinin büyük harfle yazılılır. Örenk:
- GetProperties
- DatabaseConnection
- GetUserById
- FilterProducts
- EventHandler


**Camel case**  - bir değişkendeki sadece ilk kelimesi küçük harfle yazılır diğer bileşik kelimenin ilk harfinin büyük harfle yazılılır. Örenk:
- getProperties
- databaseConnection
- getUserById
- filterProducts
- eventHandler

**PHP** - PSR-1 (PHP Standard Recommandation 1)'e göre sınıf isimleri PascalCase'de, sınıf sabitleri MACRO_CASE'de, fonksiyon ve metot isimleri camelCase'de olmalıdır.

