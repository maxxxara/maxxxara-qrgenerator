# maxxxara/qrgenerator

[![Downloads Stats][downloads]][download-url]

ეს არის ჩემი პირველი package სადაც გავამარტივე და ფუნქციონალი დავუმატე endroid/qr-codeს ფექიჯს.


## Installation


```sh
composer require maxxxara/qrgenerator
```

**Used Packages**

- endroid/qr-code


## Usage example

QR კოდების საშვალებით შეგიძლიათ გაატაროთ ვალიდაცია საიტზე მომხმარებელი არის შემოსული თუ რობოტი (ბოტი), გააკეთოთ იუზერ ექაუნთის აქტივირება ფეიკ იუზერებისგან თავის დასაცავად ან დაუგენერიროთ ყველა იუზერს ქეი QR კოდის საშვალებით.

მეტი ინფორმაცია QR კოდებზე [Wiki][wiki]._



## Release History

* 0.0.1
    * Work in progress


## გამოყენება

```sh
$qr = new \QR\GenerateQR();
$qr->generateQR('maXXXara', 'qr.jpg');
```

generateQR ფუნქციას გადაეცემა 2 სავალდებულო არგუმენტი 
1) QR კოდი
2) PATH (არასავალდებულო)
3) IMAGE NAME

კოდის გაშვების შემდეგ დაგენერირდება QR კოდი რომლის კონტენტი იქნება ჩვენს მიერ გადაცემული პირველი არგუმენტი 

---


```sh
$qr->randomQR(50, '/images/', 'qr.jpg');
```

randomQR ფუნქციას გადაეცემა 1 სავალდებულო არგუმენტი 
1) რენდომ სტრინგის სიგრძე
2) PATH (არასავალდებულო)
3) IMAGE NAME (არასავალდებულო)

კოდის გაშვების შემდეგ დაგენერირდება QR კოდი რომლის კონტენტი იქნება რენდომად დაგენერირებული სტრინგი. ფაილის მისამართის და სახელის მიუთითებლობის შემთხვევაში სურათი შეინახება იმავე დონეზე ასევე რენდომად დაგენერირებული სტრინგის სახელით


