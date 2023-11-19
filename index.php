<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="design.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="more.js">
    </script>
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
            left: 100%;
            top: 5%;
            margin-left: 0.12rem;
        }
    </style>

</head>

<body style="background-color: #fff; font-family:FONT-FAMILY
Roboto, -apple-system, BlinkMacSystemFont;">

    <?php require_once('main/header.php'); ?>
    <!-- Header-->
    <!-- <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Digital</h1>
                    <p class="lead fw-normal text-white-50 mb-0">WA digital library, also called an online library, an internet library, a digital repository, 
                        a library without walls, or a digital collection is an online database of digital objects that can include text, still images, audio, video, digital documents, or other digital media formats or a library accessible through the internet. </p>
                </div>
            </div>
        </header> -->

    <form action="" method="get" id="">
        <div class="container-fluid text-center pt-3">
            <div class="row">
                <div class="col-sm-3">
                    <div class="">
                        <select name="book_language" class="form-select" id="floatingSelect">
                            <option value="">Language</option>
                            <option value="Tamil">Tamil</option>
                            <option value="English">English</option>
                            <option value="Sinhala">Sinhala</option>
                            <option value="Arabic">Arabic</option>
                            <!-- <option value="customOption">[type a custom value]</option> -->
                        </select>
                        <!-- <input type="text" class="form-control" name="book_language" style="display:none;" disabled="disabled" onblur="if($(this).val()==''){$(this).hide().prop('disabled',true);$('select[name=book_language]').show().prop('disabled', false).focus();}"> -->
                    </div>
                    <div class="mt-1">
                        <select name="book_field" class="form-select" id="floatingSelect">
                            <option value="">Field</option>
                            <option value="Science">Science</option>
                            <option value="IT">IT</option>
                            <option value="Geography">Geography</option>
                            <option value="Commerce">Commerce</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="book_language" style="display:none;" disabled="disabled" onblur="if($(this).val()==''){$(this).hide().prop('disabled',true);$('select[name=book_language]').show().prop('disabled', false).focus();}"> -->

                    </div>

                    <div class="mt-1">
                        <select name="book_category" class="form-select" id="floatingSelect">
                            <option value="">Category</option>
                            <option value="children">Children</option>
                            <option value="adult">adult</option>
                            <option value="grand">Grand</option>
                        </select>
                    </div>
                    <div>
                        <Label class="text-start"><b>Price</b></Label>
                        <div>
                            <input type="text" id="enableTextInput1" name="price_from" class="form-control" name="book_name" autocomplete="off" placeholder="From">
                        </div class="mt-1">
                        <div class="mt-1">
                            <input type="text" id="enableTextInput1" name="price_to" class="form-control" name="book_name" autocomplete="off" placeholder="To">
                        </div>
                    </div>
                    <div class=" d-flex mt-1" style="align-items: end;gap:0.5rem mt-2">
                        <div>
                            <input type="text" id="enableTextInput1" class="form-control" name="book_name" autocomplete="off" placeholder="Book Name">

                        </div>
                        <div>


                        </div>
                        <div class="ms-3">
                            <button type="submit" class="button-29" name="submit">Search</button>
                        </div>
                        <!-- <div class="col">
            <div class="p-3">m</div>
            </div> -->
                    </div>

                </div>


                <div class="col-sm-12">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTEhMVFhUXGBYWFRcYFxUXFhcYFxcWFxcYFxcYHSggGBolGxUWITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0mICUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAEBQIDAAEGB//EADwQAAIBAgQEAwUGBgICAwEAAAECEQADBBIhMQVBUWEicYEGEzKRsUJyocHR8BQjM1Ji4YLxorJDksI0/8QAGgEAAwEBAQEAAAAAAAAAAAAAAwQFAgEABv/EADQRAAEDAgQEBAUDBAMAAAAAAAEAAhEDIQQSMUFRYXHwIoGRoROxwdHhFDLxBSNCUlNikv/aAAwDAQACEQMRAD8A8Txf9R/vN9TVVX4v+o/3m+pqiury3Wqyt15eWVtVJ2q+xhi3anGDwirWS6NEanRL7mwQ2A4SW1auiwnC0XkKzDjpRyJXP09WpqYCt4XCUwJAnmVJLCDlViKpMCjcJgwyyaCv2CrQK8zBDUlFrYmlSGVV4vD5RNUcNsBzrFQx987E0obGshlTBoxpjRTnVgGktTLjGHVW0qjh+DztoKEW41wyxJNdZwWwFWlcU/4VO2q9hXmq+DspphQgqhytXY29y+dczxLHHWKl4ek6o66bxFZrGyjcYgYGK58jKTXQ+zmIQqc51pVxQqbhy7VeZTDRAXz1SqXGUrxDTQ5FGYi3FULaJMAEntWllUXGqoLNdZgvY93IJaFIBJ23ro8J7J2be4zHrSVbGUqU77WTtHB1Ksbb3XENj2uLbVkkJHIbfnR+LwgvFWCFV27zXX2sNZ8QVRpodP3NabDoOQ0pV2OZmBLSOXfJNswLgDBBXJYjhZaFVSCNJrY4DtrHXrXTO4Hl/qhLl3fQ6QfntXDiKpnKOaKMLR/y10Sk8EQASPL0qFzhdsbAHajr10daEu39JnmJ8q2HPJj6rJawNmPZC3MIg+zQrqNgoq53LmFmKsJW2O9HLYQXvbSbmd6bqhcOBq1UYjEchVOIxRYwNTU1tZd963pql2U6mJN7NVJnnUHarWbUTtI+VUu+4ER33MTG3OthqK9zKQysC0K1RNm2pUat+FZRMqWNUpfi/wCo/wB5vqaoq/Gf1H+831NU1xBWqsSKiomj8FgCxrTWlxstNaXGAp4XMfhHrT7BYSN6lg8EFFE3L0U4yk1nVV6WGbTGeqZ5K1ABUHxVClidqoeRvWyRK5X/AKg6IammH4oybbUVhseDJbekdhZNX4pgF0oVVw0CjOeXukqjiuKBbSk7tJohwSapZIoEXXHVbQEVgmMgDc119i5lUDtrXKcJEMWPKnNi/oSedT8YM1th80/gXZbnU/ILXEMTANc3eaTTPG3JpZFGwtMAIOMqkraDpWnpnwi2CTO9dDw7hFsH3lwfPry0o9Sq1gJKXpUXVCISHhfs7dvwSIXqa7LhnBLVkDwyeZNEYjiduyxUuAQBlCxEnrQuI45ZCeNhHnUWvVrVInQ7CfpqreHo0aYJGo3MdhNmvKJA5aUNfv1zl/2lzn+TaZzsCB+Zqv3GNu75ba99TQP0wBzOGXqZ/MJgYmRDTm6DsSm97FKOcdfPt0FKcVxdB9qqb3s+CB7y65I31IB+W1AXsPh0WRqDoTqZFNU6dN549Afr7ID31GNsI6kfT3Un40jGF1NVYjH3HIyWiF1BHQx/qa0/uVGg0Omm4kb1U11QNJJImMx36mnqVJjdu+KUqPqOMT5x7KBW6RJiDOs/j3qFiwXO0Dn6c6st2y/YVLFYoIIWtuc2AGiEN7zRJLjmJ0HDqt37qoIFKL11nMDWtJmuvA259hR5tLb0Uf8AI7mswG9V7D4Z1ZxqVDbc/QKi1aCDq3M1n8O7HwqTpJA1iTGtQutNUO77jMAeZmfQ0VjNyjYiuGgMZYKV9IzBhDaQNTGomfSangbOfQQGBG5MxBJgRB+Hn23nQTXXvvsfxNMuD4tLb57qFwx1AKrA3kCN5jTaJrtR1iWjy/KSIBdwHqr7eFIEef1rK6S3jMGwByYgT1trP/vWVN/V1/8Ajd6FMmlR/wBx6rz3G/1H+831NQt2yauxKzdf77fU0ywVhRVVjMxSbWyVrA8PpzYthaoF8DaqHxVODK0WTzKrKY8OqcJcFB3jrQtlyavW3XAla+NB1RWDcRrVOKMnSti3FH4DhzXNhNCqCDKTZXz2CUGRUWYmj+I4Uo0MKDy17USUJ7oMBX4TCFhpQHELWUxT3AYkIpmkXGMTmYmgCoCbLShZeFjrRt7EQoA/f70pHav61O7iZNCe0EpxjoHsjblya1atSelVWDzo/h2DuXmy20LfT1owhjZKE6aj4CL4fcyfAs9zt+/Km2C4Xcvv4n8HUfDPQx+VPOD+xek4hjt8KmADyntXUCyllAFUmIAAEsSSAPrUt39QpseDSGd5MRfsyqP6Go+mWPcWNF5EdiOJXIj2HBADNsZzGc3lH60XY9kMMhkrnbq2tdDcv6CBBPXltM/OgL+KgQxGaJIB+g6VNq4nFVbuMa2Fvb6lUqGFw9OwE6XN9gN+WwVTWUQQqgeQpbi79QxWOnsOUgiY3ia5jiPtGqsMniIg67SDseo/Wi0cI9y1UxDGprexGVgZU9pkEROsecUovXHYFQF8W0gQImI6ULhOK550zMWLe7AMdZWPp0FD3LtyJZHEZSZBgAzBnYDpNWKVF1O7ZhSqtVj/AAviefex33QmedJmCeXfrTHD4dWJcLlEyTJ10rbOtw6W1QDcAzJ86Cx+NgFVor3XysKWLoAzDxXgT9rFWcQx4Gi7UAmHN3KFnMSZJjKFEeuhmfSqMPh3uOFUST+5PQV09rDLZUqsSfiPXt5UNzgwcymMHhDWdmcbDU8eQ7shRh1tLlXfmeZNL75ozEk6/veh7uGfKGykqdjymSI/A1qlTOp1TmKxLGAMFhoFS2NysrKYyg5QYIBI10Om+tC4jEu58Rn6fKj8JeW3JuYf3nTMxUDcHQDXcdNqDv3c7loAnkogDsO1NPBDYJM8IP1UYj+5+yAN7fz6qWAwb3CUQS2UmIkwCJgdt/SirXszfY6W2k9jQDX2DB0JRgZUqSpB6gzINN7/ALYY+5b92+KuFCIIGVSR0LKAx+dYY8NJzNzcLxHoDPsm2OpBviaZ5H8e6vweIsW0CPh0dlkM2e7qZP8Aa0dtOlZVXDsIWtqRh1ffxZWMwSORjlHpWVoaaeyQexhcTJ/9n7rnMS0XX++31NTTFxVON/qP95vqartLJAoQJGiJMI9cQW0FHYXCk70fgcOgQaCpWBrR231S9Sq4K2zhwBV4FSXWsvrAorqgAhTSS43UlQGug4XiVsoc1crZuwaOv4zMIFDIJum2VGtF1Di+L968jYUvjWiMsVUpoFarlaQugS7Mo33gVz/EL1NeIXtK53EPJpajxTDG3latvFTsIzuAoLE7Ab0dwDgd7F3Pd2Vn+5uSjua9j9n/AGWw3D7fvHKl48Vxo08poeJxbaNtXcE/Qwzqt9BxXM+zHsE7gPiPCN8vP1r0LAcNtWVy21Cj8aWYb2kW8f5EMu2aY84pi10xuBUPFVq9Q/3bctPZWMNQpMH9v1/KIuXgORPYAk+gG9L7nEASQJkROkQTMSDr9k1RicWgBbMTAmekHXyMr579a4bivtk8H3SAAn4m+I9wB5UTD4J1QEBpkeUTpsZ42jhG69VxDaZBJEepPHpw9+S7O9iiRv8As6/nSHjnEbFtLjvmFwgBIgajYzMgROkamDXP4H2kZmKsW5ZTlidPECCetG2bGGuKxxC3i0iGthCAugghmHPnVbC4AU6hDnhoIPp1jkp+Jx5NLMKbnQRoLzxyztOxOqGfipvR7x3umV+0p8BmVEc9gOus1LEcF4fBZMUG0kKVdW+6VK78ulBYhLafDCodVzQTuBrHOqMPau3czWyqKN9Y0PQE6iRVKiW06hLA0g2Ejw+WkKdiHPfRDXvc2IJiM3Q2PtoQtXOHXADeVWygEBgwQqYMHTkADINLjiXfQkknclmiBGkTG4mi8ZbKsyEq7SAWDSM25IOxoW3lCT4TrM6BhA28v0rkkiV6zTztFto7nSVbcfKpC9z+ZNB8MtZ7yBp1PIgGYJWJ03it4ds1zxNlmRJBgSDuIrofZrCoiG+/UqmnpK8yeQHWaC4/Dbm3+qNQomtUyHfU8Bv3zRdjArYUgasdXbr2HRfrQGIedv8AdML4J1bvA6fq3U8thQGIFLUgZk3K+hcA1mVogbd9nilmIqmzj2tMrI0MpkTBAOxJVgQRHY1PENTHgnC8LfID4i3abZhdYIPNWOhHaZmexLxcGiSY58FKLRUcWggdSl/GOPXcQYfIADoLaKikjnoAT6/IVvgj4fMf4lLzLEgWck6STmkjSOc069psLgLCZMPeGIvHdk1tIOfj2ZiJAA23PQ8oiz5a/ONN62asuzNdm5mfrskMQwPBYXTzB+quxrq9xmtpkQnwrM5V2Enmep6mqQsHt9R6U14RwgXnVDet283O43u12kjM8AnpB107wf7UcMsWV/8A6bd7EF/htEOipGmdh4QQAAACTr2rGW0/yuFwbAHfX8oU4dDBFoAEAjnuAd8wmsqjDY/EKoVLhCgaCFMD11rK5J4DvyWco4rn8Z/Uf7zfU0TgcNOtaa1muuf8m+ppvhrMCt027lL1quUQFZbtwIom2KgtWLWKuIDbBJtzO1RWGMVPES21btJpUrGJUHWgNzuMlMikAIVH8KRVJaK6Q2Fa3M6xXNXhqabDi0Qh1KWhVd67OlaZoFRoPHYiBSFV2d0BGpMtJQPEb9XezHs7dxt0IghRq78lH61TwnhtzF31tWxudTyUcya9n4LgUw9sYfCgafHcO08yT9pu3KgYrFfAblb+4+3MqphMN8Qy7Qe/JHcKwNnBW1s2Vlug+JjzLUo45wa9i7hF1wttDoswu25603tXAoPuyD/febaex5+Q0q7DYcvqJ++25+6vKpuCxf6at8YtDj/248VWqUQ9mXQd2XP8H4GbLCGlBOVYmZMkqPlqabYk5SWZmAAByg9M2p6aH8Kbphwu3qeZ9aFxaCCNIOlZq4x9asajrE8BseC0yg1rMg6+YuuGxPtEt4siIVXXVtJEEkiATqAYqy3a4dtdvhG3ysGn8BrTniuEVwQEtrEsz6qTtpzB3Onh235Fdh8Lh0WbmGz3IIDZ4VgeZGUsNNNOlfQYbE0MM4fAcch3IBdI4tk+RtNylGVK4nMAXW28ImdDvz8tEi4jbtXHCYFGLk6M0CYEgKD1766bULetXrDKuIAUkyELEkKpmH1Jy6QJ1NG8Q4czWy6+7A8ReQdfFook8sw76DczSvC8Eu3iwsIG+HORBIzbaKTqRHcGZjamG56+okuvO+/MADy9Uli8UxmZ9QxtJsNtBEE80NiMUEuBlfK6ExcQRPXuTHXkdaHu4jwwWn3niYaCGDHckHqx060bbxF2yWQJbJuEKwuIrnMrFZXlvPy2qx+A3iZILR1jz2HmaxVrMZDSbnbT68LJalSe9xcAItcXmb8NJvrvshuGthw7LiM62twVys28DTSQR0106VvjlzC6DCh8o3ZwFzHsvIefWqMVgfdGHiTyPLv++tBu2ug0HLlWGHPdpMH0+U+626o5rTSgdYv697qeFsZyFg5idSY0H9xJ2AGp05V2GDsgqrwQiiLKnko0zn/JvwB70i4bgHd0bKFR9CRtlGtyJ20BHrFdXfjUnQDl5fpt5+lDxRIIHcfn5dVR/pLQ4OftMeYuR0GvXol2Kb0/ew/f+kWMu/KmGOvyYH/XlQuHwVi4Sb97Jl1C5GIeOWZdjOmtN4fDw2UTG4mxjZJrj1KxgXusVtieZ2AA5tHQc42rL6CTG0mJ0Mcp6HtW8W4dVPu0UDwkr9pt5IJOsfvaNPsbqQ8khD3bcEgEEAxI2McwelaynYnTffSY0258quwplgpMAldYmNYnKN99oM044pwSxZQ5MSuIulxlFokgKASzMCNDsIMHfSBNDid1yTEwUnxWLuXI94xaBA0Aj0A377mprgrgti4Vi2xyhjEE9uekU44P7OrdP8y/at5dbil0zKsAhhr4hqBodKAPDi95hh1N1A0BgCFIHOTMAgGJ1gV0AuJ3OnOUJ7gyLwInlHCdJ+SZ28KigL/F2xHL+Zp/41lJlcd/QiPpW69PNdgd/wAKuxa8RPc/WjVqpdz5mpg0vVqnQJIszukqwtFQF6oGTpVN4EVinSJuUYNhHjHQIoRrsmhi9WYcSacMNErgBcYTvDYm5lidPxoS+9Eo8LSzE3NaSNbNomjSgXWrt2BSbE3SxgakmAOpNW43E0z9lcMA3vmiRItztm5ueyj8dK5Pw2l5W2MzGF2nslwf+Ht5Ji4wBvv/AGCJyKeRjc8qdfxylQFBFmcttF/qX2H9o5J35/XmhxDNFpQzAmCs+K625UnkvN29K7XgPDyn825BuERmiFUcktLyUdedRK0yX1NT33w4SrdKIyM779+mpXD+HMYe/Ej4LS/Bb8/7m70e985ioGnWdPp+9aofFFtEGbuTCj15+k+lBY24iqWvPIG4EhPKBq3kSfKgAlxuOmtvT6o2XeUQMTMywPZeXmf+qovXOunqex7UG/EAVX3aMQYgKsQOpH2QBQWJxCFfExgwMoQnwEEN/iDrzg+HTnDdLDPdctyzMG/+I8QiPI8EJ9djbTmiJEifEfCZkeXFXYnGLtIOhOkEjcDy1FKuJG4om5C5vhBK5mkgSBMt10G2vWN3rdlc3us3uoBIclSzBSFORTAXTrzO0ikhxFlXHvbZuAmMqlQZyxI318W5FUMNhml4a3TjBn04nmksRinCmXkeLhI9CTGm+irxaPcIgg6/FmXnJ0EiZ/Kl2KsXrarcYMgMqCfCxga7axH4nvTS3xi5Yl7YyMCwyMttkKz4RBXxFYPiEc9dYoLG48Yj+binuO+V1tgKi2gZBABUiB4hIC9JPOqjGtyAaHcnSOW88Jsp1R3iJmw2gdLGRvfu6tnAy5AZ0IgCRGhO/Ufhyro29u8SqZAuGnYv7psx7xmyg+npQOG4pdwqAL7pwdRntBsoZRqpIBGpO8gnUA7lRiHLFmYr4unM8yI0+WnSl6+GpVo+KwGNJ/HuDbqtsq5Gj4bjz0770WsRijclmbM06k7meg6f6qpBWchpt+4qxRR2tDRAQXFdD7JWYzvz8KL5nU/KAaK4jiJOVdv3Hz+L/wCnSt8EhcPJMSXYnoNFJ84Q0MATLHny5f8AQ29KFQph9VzjsYVykcmGYwbifIoe5a0oDEKKa33j960txCT+tW8sNslaoul/uyxgHqfp/r5VBME+wUmdNpmm/AMVatXpvA+7IgkCSpmQ0cxvtrrXb3uM8Js28wdr9yJVLYuKSf8AJ2ACjrzidDUHE16jK+UsJHEDsDzKy1lM0yS4B17fxeF5imHytluSp5iNRoDrMcjTXH4bCW7c2cU1122QW7iBeUsXAG06CeXLWluMxBu3GuNALsWIGwnkOw2qpbex67UaHGLxxFvqJ9ISmYCQAFpUkgASSQANzJOkDry9aIs38qwqtmO8McrCRoygSRuN+fzt/g2VVuEQpYrJWVzA7aiDzlddtRrUreJuWLpey4DDZkyssMNRDAgjsRpHatgRqgl8yG639uKutYJSPG6q2sq0hgZ2IO1ZS66cxLMSSSST1rKE5kmQSiCoQIgK9zBPmaJ4daLkgfOgLzeI+Z+tHcJxJRtpnpWWU73SzVvHobbQaAvXZo3i98sZIjpS0UyAF0qSiaYYS1Q+HtU0tpApLE1v8QmsNRkyVVingUixd+j+I3a5+/ck0OgzdGrEArNWYDqaZJjGZltWVJ2RANyf9nX0HSlloGRlkk6ADUknSB3r0f2V4amDKhl95jLgkWx/8SdbjfYHXmdhWsTVbTbJEnYd6AcVmhTLzAMcT3xXQeyfAP4ZM1yGvMAGO6oN8qj7R/PWujJnQyTzGhP/AC5AdtqEtF4jduZ2AnpBmOw361u/gLr5VtvkAm4zaAQsEgDuY5E99aggOr1Lm578laJbRpyAYHnvHmi2vcuf9o8Wg6nYUO5EgsiPGwJJgiYII5iaiphfCAB15SdJ0Hc/I0qxKMQbbXFdm6sq28pgFNNSTJAMgj6FpYcluZpj59QNbXlZq1WtJa4TbTbzOgmyvxePyS6nLoZKiAARECNhBP59kWI48gRsuq7GQuaQIkE956bDrQt+1fZvd2XF6PjhfDIIO8ajy6HrWcVxdxnBuWsMPdmMgXIrQAYYFs2oJjbtrVXD0GN1cc1vQ/dT8RWfmaMgDTqeBGkCBMbFJ8PxI3jBOSZBLSBEqN/UzpoBzmKyxhkuFnLOrJqpt5IMQJUlgZkjYMdedE8exwuKlqxYVNAXK5ydz4TmPKJjsOegHxzsiiyTakxmKZD5ZmGgkctD1NWGspsEsByx4SQL+UxE73ISlR2V5JM9RbvkhbitcbSJmBtqTMQY16eo5mqcfhblpvd3Aysu6HQideun/VWrhyApMsvxELDHKDBMHptrprHWreL28IltBhrlx2Pxkp7tBHIKdZ18tKXJyw2D12QLnxT90RwjC4O9Pv8AEGxDElSlxlIH+SCCw6QBrpuQF2MtWy7CzmKD4CRqwnfKdRue+0gaxViMS9zKbjs5ACrmMwo2En1o7gnDbd9sj37VjaWunKpE6w2gBiNCQTrHbc7bdB8wAVt9YlgZA8hf11S8zqO87CPToNTpR1nhn8s3ff2xIgWg38xjOxTcARMkRWcSsW1ustps9sEhSJgwNYzaxOxO9StW9P361l1QMvr3qlXEmwKd4BJsKOunpmJP1NbuiPT6/v8AOrsEv8pR0DH5kihcW/L0Hr+kNS2FqeM9SvqabQKDCf8AUfKfqhbg0J5mlmLflTTFmB+/3/1Sa4ZPb9/M1de85FNrGHQh7lsn61WyRTzizYdgv8OtwMfiLhRA1gCCZOu/alT2o86QpzUZnII62KA8Bp1lXcHw1q5dCXrq2kO7sCQI5bEir+PWsOlzJhnNxR8VyCoYmPhB1juevzXIo5/vUcue+36Vv3ZHI9uhjpWCTEBLgkEmdY8unXdVweQnyonCtEs6EyDpOUaxGw8/9URwvFe5bOba3FIhkJIzAmdGHwmQNdfxpvx72nt37YtWcMlhdJbMbjttoDlAUTE7k9qFnc18ZT1tHnJn0BlHDaJpHM45uAH1n5LnK3U8larcJXMi+F8HuYh3FtHeCZCgnnzjarLCC1dKuCp2hhBBHIg7GvQ/YbH2MJbe3fZbbF2bMdA0xz6jaO1cH7fcWt4nGNctfBlVAYjMVmWjfWQPJRWoWdEv41fViAPWKCsW60i0fhbVArVcoTFGmXlX4W1VmJuQKtJgUpx+IqaJe6VTgU2wl3Eb1KjV2IuSaY8DwpZ1YIHYsFtIdmfeW/wUeI+g2mqDYY1T3HM5M/Z/B3LbAWlBxTjMpb4cNbP/AMrzsxBEdARzIFehcB4EtoQCWZjmuXG/qXG6sT8ImYG47Gao4Fw8WlhTnuOc73DvcbcueiifCOQI+08hxjOI28OkuTpGg1didNABp5mAOwqHiKzqj4bv7/jgPPVWKFEMbLtvb88UwtIFEAeZGnc1TicQoE8+Q7fn/wB+nBYr2jxt6fdD3SawBGaIjViJ+VHjFXCqkMM7ABjIMHQEgAyxnl56RRhgHtaHO0KH+tY5xa3UI3jPGktqMzkTpG7HrEfvvSR+JAjOgYgA6zBhiQM0DTeO9FYe3hUb3mLZzknK1tWZTrBBDwSTv5UI+OsXGe57t1DAi2oNsaDm2h1JG4gzIp6nSpsYHtMnp9wB7pSpVc55YRA4zusT2leyot4a7e8ZggpaUqOYVlzEb8o8ta0TeupCpcdl0mEOTNB8TAjxwCZ15aDkCmOexnFswzeE6DKu+8/b+ms6yANw91lhduXVRgS2TUv2ILrIJG+tM06TCGki+5MX4bfPXbilKtZ4LoPSJPW1h0jT2Rdm3fUm1gnvOD/UhWVdeUAyNt9PwoXC8IlXd71q37skFGDEsw+yoUamOh5cqFDFSchZRqNCQY6GK1cuJlUBIYTmbMSGHLwnRY7b0wTYdexGyHmGi3gb7rcUpln/ACCssc5DaEVAZXclmyjUiFkTuBodKy841yjLm1AJkheQJgT12FVAVkRMrJJIiVNE0kco/GrrFrMZLquUAw0+KIECBvFTSzlt5/AQxyxmUsD1Cg5h5nTWsyWyBlL5oOYFRlBG0EEk9zArSw5QLrIAEE6gc6Pwy1YMXZNoKMOBd0Bul2bQf2oR4SfMxJjtqyO375UjiHgj+PoT9FoNE2TnBf0/kPkxpUbs3lHQM584VR+JemGHaLZ82/HX86QYTEj3uIc7IAPQZmP4zWcJ+4q/nilSHIe1/otcaxgXSd6EwNi5cYBEJJJA6sQJKjppud9eVKsKzXr4Y665jOwA1jyrqh7RuLgbCqtuBlBQAgkbkZ5luebQD61S977tHTu59AecKQ9xeSe/z6hAXcNctt7u4MhEZtZOonf1/e9RMSAZC9hJ+VXnM7FmaWY/ETMsdzJ3Hc+fQVR7qSQCNJ1JAGmuhO9Ff4WwgPfsSjOGcDuYgMbRQBdWLuqlABM6kaHUT2qniOOuXY94wYIMi5VVFA5kBQBrEzQjIzEGCdtd4AgCPIAD0q10+GVK+Hczrvr+WnSlshiY87/wskEGXGx0056b30KuxPE7j2ktMVyJtCKpMaDOwEsQOv1qeDxwQTlBeI8QDJlGq+E6gggag7TvsQBz/f7/ANU4HC8OLRunEqWI8NoA556EfZE86EXhhAO/In5b8PmjMpfFBlwECbmP57slOasqeWsosFKZwuj9s8QLt8pZ2AHkN9OdcpisMyNDc+dF2eIhLhJ1Fax+MF1hAgCsPflEo7WSVRh7c01tLAoawkVu/eipVRxe5V6TAxsqOLxFc/jr80VjMRNANYJpmkyBdLVahchwJr0P2awSooc808P+NnXUjrdYMx/wUjmK5Xg3DQ9wZ/gEs/3F1PqdFHdhXYNjYkkakyVG06BVHZQoH/DvQsU4uGQeaJhWhpzuT18b7tSZAciSTEIupE9W1J8yTzAqNqwGg3lYKYOv9Qk7MwO2kwDqdYAqzhPCjpdv6tuq8lO8x/d3O30I4jB/HX9P13OnQVLsDA14j6d+qokEi6YjinDrSEe7uXHiMoULvyLEwO8TXKHF3XZktgorn+mkmOw5kwPWoYrKvPTYcteg8qpu6GBqYOnhI2M66jrB3PLqHG1KjmBhcSBpN/bRJso06ObINblQzqrgOq3F8X8slgSQxAnLOW4csTt6UJxPiNst/LtpaMR4SXC6R4WO7T9rQdOtaa8XIT3gAiDcaSqroCFiYWIE89BtuGVYM2RPeWxPiKNk0lVcCdCAxidp71So4efE7vySNbFESxp58vI8fPohrttlJVgQZ1UjL5actD+NNcPbfE2xZtWUDJ4muLmLkHSCCxAE7wNyNtiqZquwd+6lxTaNxLoIAglHk6ZZ00M7d9aO8PLSGGClmQCC8SB5JjxT2Wv4e0GuAZQRLc5aBE8x286U40MxVioClR8ChVMaECNCdp7k0TxziuIvNGJvXLhQkAMzEKQSDCnQHltOlAG+6hcs5gZB3ynsD5n51luYMDXa7r0hzsw0JtyB2/Psoo2Ytv2neP8AoVbbU7gTGp56dfKp3sWXEaQNR4QCCRqs7kbfLSOdQokAaLhlF4j3OUe694GgFw4QIG2i2VJJGo3C7c6hatIUZjdCuNreVyX03DAZQN9yPWqbdwqZUlSNiCQR5EbVgPOsvM3Qyr7KzRtt+vX9T9FNBWalj72RA4+yykjqAQCPk5qc8y6Ai0ReU194cpXup9CQp+hrkkv/AMnFEfadPkWcmugw+JkmNZCEH/HMh+pufKuPzQrpzzD/AMcw/OtYcWI6Ki98Mb0I9oVuDlh7tTAOtw/4jl5R9ad2bYA0ELH/AI9P19e1L+F4bTXnBby+yvruewpuqzvt9T+/y6Vcw7DF0iTAlRc8zp+Q6edCuaIvGaGNDxDpdCBN5THBccv2rbWkcBGn7Kkid8rESJofFusIEd28IkOICH+1dTIkkzpvVCPEEd/xkHT50RgsKHuBDcW3uczmFBHInlSuVjAXRG5t9lsuc+GkzGnL7Imy2G9ycy3vf7CCnujrILT4tByj1ofD25NbuWQHKqwZQYDDY9x2ppwrCyy+dNUml0DZJYuvkbdD/wAHWUfjMQodh0MfLSspr4bFPa+qRK4wiWPmfrTDDW6Ht2/EfM/Wii8Cvn67y4wvrcPTDRJVt27FK8XiazFYmlV67NcpUtyu1aquttmam6ZYpHYeKPwzzRXDggtMptavi2gjdzJ+6nw+hfNP3BXUezXDoAvXd97anlOzEdTyH+oQez+A97cDPqiRIg6n7K9CNyfLvXZXcVrA1/evpy/DrU/FPjwt8/sqWFp5vEdNvujruJ0+fP8AP89vyTcS4iFA3LNoqgan05cu5+lPEeIEHKkG4RJmAqD+5jyH78+cu4tjKW2J3L3CTzgNlH2QYA0GZoA6LQKFAuv3389kbEVgy2+/fH5I/iF0Z/Dc96xGYmAqpvIInKIg9hvJ5BviCw92rCIJLNILayQNJg6wDqfkBCwAfAGCA7s2gJ5FomB0AmO51rd/+U7Lbu5hGUsshWkAsBO6zI7xNWqNAMu5Q61cus3v6Kpr0oq5VGWTmAbMZ18WsGPKe50qa4l/dm3nbJIlA7BSxMgsuqn4O2w6Gp4Hhj3yVtlAYmGdUkTGhYgGPpVN1FVMvhLAsCykkmCNT9mNTGU6x6lktOWfLsdjml8sAHiUW/AsUi3Lj2sqL8UiMvQAnXmPPSgcZinutmusXaIk66CdPxPzNX3TfNsC4173YAZFYubcSoBVToPiGo60BcaNga7UcCfCI5TK4LmbcjG3Cb+ojotIw7QP2BR3CMf7m4HNtbo+0jSAZ6MNVPfXyNRtYa5iHOXISBmaTbtgxAJ5A9/nQ7Dy/fadP+qDla4EFauIdxTbj/GhiWXJh0sKojKpLsx6sxAnToBvrOkK3Om/bntVt6+rKgFtVZRDMGYl+hIJhe8bn5VQRWySdVgANsEThOE3rhkLA8p09ahiMO1tirb112B9vRashBg7ZcCM/vGg/wCRTL+GauWxmMe9ca7cIzMeQgDoAOQH7mpzX1/iHM2G9QSe+cJmq6mWw3y5LMOKhxZZsv5A/jP/AOatw+9axwm2w6q30I//AFQZ8YXabbJJgcZCpr/dbPkZZD82agsRAutI0zEx1kyBQwOkUbhVz3hzGhPoB+lUWM8dt/uvZiWwneDtZVAO51b7x/QaUU+mlQt8vn86jcarP7W2Qn6Ki6apJqdw0y4DwC5imhCBB1kgR31qZWqNbLnGFmm0uMBAWwMplgNdRrOx5RUFFH8e4cuHum0HVyPiymQD0nrQeHWTXWODwC1YqDITP8I3BWZIroOHOEck7Jba4foPzoLhdmaX8S4l/JxjA/E4sL5Aa/U1QZDG5u7KFWmu8sHIepA+6VWcazgv/czt82J/OsoHBfAPX6msqd8Vy+kAAEBMjoT5mg8TiKzF39T5mld+7NIsZJkpx9SBCy9dmqa2KuWzO1MgJUmVSpo/BvQd20Vo7glovdUcgQzdAq6tPoPxrL9JW6esBd7w+37m0qD4iMz9QTv66R5LPKt4jE5QYgHmTso2k9QNgOZ7ChziNzz5k8gN9evKexPWkONxvvGyj4QZ6SevkBoKkspGo75qy+qKTbdB381mIxhclFkJMsT8Tn+5+vZatsgAQQ2XkFAknWCT15c4kxVKgcgB2Gw/XzNTDwfz/OrVKkGDmoNasXmNldma2fFbAJXZwdJEBgAQJ+dDzU4NxviG2rO0DQdWPbTry6UZgFw2Qm69xbg1UKmYmBplJMAzvMUVxvy9YQabZ1ifT5paN/WskmdNtSdB23Op8h3PWmOB4M1y017PaCJOYF1DTyGU69I86qbixNkWTbtQNnyn3kecxPeKEXG0CeN9ERrWXDjtwOqGtXwCBcBdB9jOVB3O8GNddqrXEuFZQxCsQSoJykjYkc4qlug51k/IaCtE7IcBWCy2UMVOUmAY0JHQ7TW60GMRJiZjlPWK3XSuKQrJqIrc1hxheW6mtRFSBpWo5aAVttvEB/iT+K/rU720do+ZX9KFL/zB9xv/AGSrMY8LPn/6tShHiCbZouTIplwYau3YAf8AIxQN/wCJvM/WjeGtpHVx+AJqvSPjBQk8Db/v98qquNWs2godrssR0gfnT1Z8NWXaKRNaDEbEjyrU1lJocLaij+HpMmgAaYcMufyc39xIHq0D8KLS/ddLYgxTtyCeC4LVg3DyQn8K4bFX5w6Kd2uPcP0p/wC1OMy2Ag+0Y9BXI3LsgDoIrWJqXyjgg/0+h4c7uPykI/B/APX6mt1mC+Aev1NZSKqoXF3PE3mfrQpNZWV4LpMra704wECsrK0FxD8TM0z4CuRAR8VzWeih8i/+Rk9lrKyg1/2wmMN++e9Qp8Wxn2R/y9fhH6+dD2jpt+tZWUTDMAErGMeS5W5qvwWFNx1QaZiB8zArdZWqzy0GOaDTYC3NzU+J8MewwDEEnWB5A/nQRet1lHqNDXuA2JSuHqOqUKb3alrSepEn5qBYTU7bqPiUsIOgbLryMwflWVlDndHc0aKnNufQfnUlrKyuBZUs9bDVlZXV4rc1uaysobllTVq0WrKykn6ozUPeuRcH3G/L9KJx7eE/vqPzrVZWYu1MDRczReAfxehPrEVusqiz9wQUze7A8qBwLzmPUzWVlHqmSFw6IzNW5rVZQ0NUYu7CnyovDXot2F7yfxNZWVqmbnvcIdYWHn8ig+PYnOyjoPrSqsrKHUMuKLSAawAJrgh4B6/U1lZWVhEX/9k=" class="d-block w-100 rounded" style="height:275px;" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="" class="d-block w-100 rounded" style="height:275px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="" class="d-block w-100 rounded" style="height:275px;" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>


            <!-- <div class=" d-flex " style="align-items: end;gap:0.5rem"><div>
                        <input type="text" id="enableTextInput1" class="form-control" name="book_name" autocomplete="off" placeholder="Search">
                         
                        </div>
                        <div>
                        <button type="submit" class="button-29" name="submit" >Search</button>
                              
                        </div>
                              -->

        </div>
        </div>
        </div>
        </div>
        </div>
    </form>

    <!-- Section-->

    <div class="container mt-3">
        <div class="row row-cols-2 row-cols-lg-4 g-3 g-lg-3 mt-1">
            <div class="row">
                <div class="col-sm-12" style="height: auto;">


                    <div class="">
                        <select name="book_language" class="form-select" id="floatingSelect">
                            <option value="">Language</option>
                            <option value="Tamil">Tamil</option>
                            <option value="English">English</option>
                            <option value="Sinhala">Sinhala</option>
                            <option value="Arabic">Arabic</option>
                            <!-- <option value="customOption">[type a custom value]</option> -->
                        </select>

                        <!-- <input type="text" class="form-control" name="book_language" style="display:none;" disabled="disabled" onblur="if($(this).val()==''){$(this).hide().prop('disabled',true);$('select[name=book_language]').show().prop('disabled', false).focus();}"> -->
                    </div>
                    <div class="mt-1">
                        <select name="book_field" class="form-select" id="floatingSelect">
                            <option value="">Field</option>
                            <option value="Science">Science</option>
                            <option value="IT">IT</option>
                            <option value="Geography">Geography</option>
                            <option value="Commerce">Commerce</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="book_language" style="display:none;" disabled="disabled" onblur="if($(this).val()==''){$(this).hide().prop('disabled',true);$('select[name=book_language]').show().prop('disabled', false).focus();}"> -->

                    </div>
                    <div class="dropdown d-inline-block">
                        <a class="" style="text-decoration: none; color:black;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select an Option
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#" id="IT">IT</a>
                            <a class="dropdown-item" href="#" id="Commerce">Commerce</a>
                            <a class="dropdown-item" href="#" id="Geography">Geography</a>
                        </div>
                    </div>




                </div>
                <!-- <div class="col-sm-9">
                                
                            </div>   -->
            </div>
            <?php
            error_reporting(0);

            $msg = "";

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "book_store";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            //   $num =1;

            // Ifissste get== ""
            // Initialize the WHERE clause
            $whereClause = "";

            if (isset($_GET['submit'])) {
                // ... (your existing code)
                $language = $_GET['book_language'];
                $field = $_GET['book_field'];
                $category = $_GET['book_category'];
                $book_name = $_GET['book_name'];
                $price_from = $_GET['price_from'];
                $price_to = $_GET['price_to'];



                $book_name = $_GET['book_name'];

                // Construct the SQL query based on user selections and search input
                $sql = "SELECT * FROM book WHERE 1=1";

                if (!empty($language)) {
                    $sql .= " AND b_language = '$language'";
                }
                if (!empty($field)) {
                    $sql .= " AND b_type = '$field'";
                }
                if (!empty($category)) {
                    $sql .= " AND b_category = '$category'";
                }
                if (!empty($book_name)) {
                    $sql .= " AND b_name LIKE '%$book_name%'";
                }
                if (!empty($price_from)) {
                    $sql .= " AND b_price >= '$price_from'";
                }
                if (!empty($price_to)) {
                    $sql .= " AND b_price <= '$price_to'";
                }

                // Remove the trailing "AND"
                $sql = rtrim($sql, " AND ");
            } else {
                // If no options are selected, display all data
                $sql = "SELECT * FROM book";
            }



            // $sql = "SELECT * FROM book";



            //     change 
            //     else ig get == singel 
            //     $sql = "SELECT * FROM book wherw ;angeuge = asdassd";

            if ($result = $conn->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        //   echo  $num++;



                        $b_id      = $row["b_id"];
                        $b_name     = $row["b_name"];
                        $b_price    = $row["b_price"];
                        $b_filename = $row["b_filename"];
                        $b_est_date = $row["b_est_date"];
                        $b_author   = $row["b_author"];
                        $b_isbnno   = $row["b_isbnno"];
                        $b_publisher = $row["b_publisher"];
                        $b_pages    = $row["b_pages"];
                        $b_description = $row["b_description"];
                        // (b_name,b_price,b_filename,b_est_date,b_author,b_isbnno,b_publisher,b_pages,b_description) 


            ?>



                        <div class="col rounded-3 m-2" style="background-color: #ffffff; width:200px">
                            <img class="" style="width: 187.5px; height:187.5px" src="../dashboard/image/<?php echo $b_filename ?>" alt="pic">
                            <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNtyEpcgbyT48tITkMuYl_sB2KUi4uzDLiXQ&usqp=CAU" width="185.99px" height="186px" alt=""> -->
                            <div>
                                <p class="" style="color: black"><?php echo $b_name ?></p>
                            </div>
                            <div class="p-1 text-center"><?php echo "Rs." . $b_price ?></div>


                            <!-- <div> <button type="button" class="btn btn-secondary mb-2" name="view"><a style="text-decoration: none; color:#f9f9f9" href="view.php?view=">View </a></button></div> -->

                            <div> <button type="button" class="button-29" name="view"><a style="text-decoration: none; color:#f9f9f9" href="view.php?view=<?php echo $b_id ?>">View </a></button></div>

                        </div>







            <?php
                    }
                } else {
                    echo '<div class="alert alert-warning w-100 text-center"><h2>No books found.</h2></div>';
                }
            }

            $conn->close();
            ?>


        </div>

    </div>


    <?php require_once('main/footer.php'); ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jquery/main.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/main.js"></script>

    <script>
       $(document).ready(function() {
    $(".dropdown-menu a").click(function() {
        var ajaxResponse;

        var selectedValue = $(this).text();
        $("#selectedValue").text("You selected: " + selectedValue);

        // Send the selected value to PHP using AJAX
        $.ajax({
            type: "POST",
            url: "main/ajaxHelper.php", // Replace with the actual path to your PHP processing script
            data: {
                id: selectedValue
            },
            success: function(response) {
                ajaxResponse = JSON.parse(response);
                console.log(ajaxResponse);
            }
            
        });
    });
});

    </script>
</body>

</html>