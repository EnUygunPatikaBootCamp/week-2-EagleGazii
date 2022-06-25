### Soru 3: OBJECT ORIENTED PROGRAMMING (OOP)

- Taşıtlarla ilgili bir sınıf oluşturulmalıdır. Oluşturulan bu sınıfta aşağıdaki öznitelikler bulunmalıdır. plakaNo, marka, model, tekerlekSayisi, kanatAcikligi
- Taşıtılara alternatif olarak üç tane sınıf oluşturulmalıdır: araba, motorsiklet, uçak
- Oluşturulan bu sınıflara yukarıda tanımlanan öznitelikler (property) değer olarak girilmeli, aşağıdaki gibi ekrana bastırabilmelidir:

    -   İlk önce bu sınıf isimleri ingilizce yaptım: 
        - Taşıt - **Vehicle**
        - Araba - **Car**
        - Motorsiklet - **Motorcycle**
        - Uçak - **Airplane**
        - model - **model**
        - marka - **brand**
        - plakaNo - **registrationNumber**
        - tekerlekSayisi - **wheelNumber**
        - kanatAcikligi - **wingspan**
    - Sonra **Car**,  **Motorcycle** ve **Airplane** sınıflarında **model** ve **brand** öznitelikler aynı olduğunu ve özellikler göstermek için üç sınıflarda aynı metod olması için **Vehicle** isimli bir *abstract* class tanımlayıp, **model**, **brand** öznitelikler tanımladım, sınıfın içerisinde tanımladığım öznitelikler için getter, setter metodlari tanımlandım, ek olarak *abstract* fonsiyonu olarak  **getProperties** tanımladım. Bu sınıftan miras alan alt sınıflar bu öznitelikler erişebilir ve getProperties funskiyonu zorunlu tanımlaması gerekir.
    - **Car** sınıfı **Vehicle** sınıfından miras alarak *abstract* fonsiyonu tanımlayarak ve ek olarak **wheelNumber** ve **registrationNumber** öznitelikler ekledim,  sınıfın içerisinde tanımladığım öznitelikler için getter, setter metodlari tanımlandım, **Car** ve **Motorcycle** sınıfların aynı öznitelikler bulunduğu için **Motorcycle** sınıfı sadece **Car** sınıfından miras alarak bütün öznitelikler ve metodlar erişilebilir, sınıfın içerisinden farklı öznitelikler eklenirse o zaman getProperties funskiyonu overload edip istenilen sonucu gösterilir.
    - **Airplane** sınıfı **Vehicle** sınıfından miras alarak *abstract* fonsiyonu tanımlayarak ve ek olarak **wingspan** özniteliği ekledim,  sınıfın içerisinde tanımladığım öznitelikler için getter, setter metodlari tanımlandım.

- OOP kodu <a href="">link</a>
- UML Class Diagram:

<img src="https://github.com/EnUygunPatikaBootCamp/week-2-EagleGazii/blob/064ce1e1cab17be2b17d802c1957d7a1b4ddc690/Third%20Question/UML%20of%20questions%203.png" />
