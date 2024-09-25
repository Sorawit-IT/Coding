<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style1.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    </head>
<body>
     <!-- การสร้าง slider -->
     <section id="slider">
        <div class="carousel slide" data-bs-ride="carousel" id="mySlider">
            <ol class="carousel-indicators">
                <button data-bs-target="#mySlider" data-bs-slide-to="0"></button>
                <button data-bs-target="#mySlider" data-bs-slide-to="1" class="active"></button>
                <button data-bs-target="#mySlider" data-bs-slide-to="2"></button>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">ผลประโยชน์ที่แฟรนไชส์ซี่จะได้รับ</h1>
                            <p>สิทธิในการใช้ชื่อตราสินค้าและเครื่องหมายการค้าของDremCOM ในทางธุรกิจ</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">ผลประโยชน์ที่แฟรนไชส์ซี่จะได้รับ</h1>
                            <p>ระบบ pos ที่ช่วยให้บริหารงานได้อย่างมีประสิทธิภาพ</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">ผลประโยชน์ที่แฟรนไชส์ซี่จะได้รับ</h1>
                            <p>สิทธิในการซื้อสินค้าผลิตภัณฑ์ วัตถุดิบต่างๆ ในราคาพิเศษ</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#mySlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" data-bs-target="#mySlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
    <!-- form-register -->
    <section class="form-register">
        <div class="container">

            <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden"></span>
            </div>
            <div class="spinner-border text-black" role="status">
                <span class="visually-hidden"></span>
            </div>
            <h2>เข้าสู่ระบบลงทะเบียนข้อมูลพนักงาน</h2>
            <form action="insertdata.php" method="Post">
            <div class="form-group">
                    <label for="fname" class="form-label">ชื่อพนักงาน</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
            </div>
            <div class="form-group">
                <label for="gender">เพศ</label>
                <input type="radio" name="gender" value="male">ชาย
                <input type="radio" name="gender" value="female">หญิง
                <input type="radio" name="gender" value="Other">อื่นๆ
            </div>
            <div class="form-group">
                <label for="">ทักษะ</label>
                <input type="checkbox" name="skills[]" value="Java">Java
                <input type="checkbox" name="skills[]" value="PHP">PHP
                <input type="checkbox" name="skills[]" value="Python">Python
                <input type="checkbox" name="skills[]" value="HTML">HTML
            </div>
            <!-- <div class="mb-3">
                <p>วัน/เดือน/ปี เกิด</p>
                <input id="datepicker" width="276">
                    <SCript>
                        $('#datepicker').datepicker({uiLibrary: 'bootstrap5'});
                    </SCript>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextareal" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="exampleFormControlTextareal" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">รูปพนังงาน</label>
                <input class="form-control" type="file" id="formFile" >
            </div>
            <div class="mb-3">
                <input for="form-check-input" type="checkbox" value="" id="flexCheckDefault"></input>
                <label class="form-check-label" for="flexCheckDefault" >
                    ฉันยอมรับเงื่อนไข
                </label>
            </div> -->
            <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
            <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
            <a href="index.html" class="btn btn-info">กลับหน้าหลัก</a>
        </div>
            </form>
    </section>
</body>
</html>