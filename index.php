<?php
$pageTitle = "หน้าแรก - MyWebsite";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก - My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: { extend: { fontFamily: { sans: ['Kanit', 'sans-serif'], }, colors: { primary: '#4f46e5', secondary: '#64748b', } } }
        }
    </script>
</head>
<body class="bg-slate-200 text-slate-800 flex flex-col min-h-screen">

    <main class="flex-grow w-full max-w-6xl mx-auto px-4 py-8 sm:py-12">
        <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-sm border border-slate-100 flex flex-col md:flex-row items-center gap-10">
            <div class="md:w-1/2 text-center md:text-left">
                <span class="inline-block py-1 px-3 rounded-full bg-indigo-50 text-cyan-700 text-sm font-semibold mb-4">Welcome</span>
                <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 leading-tight mb-6">
                    นี่คือพื้นที่<br>รวบรวมผลงาน
                </h1>
                <p class="text-lg text-slate-600 mb-8">
                    เว็บไซต์นี้สร้างขึ้นเพื่อจัดเก็บข้อมูลประวัติส่วนตัว ทักษะความสามารถ และรวบรวมรายการงานที่ได้รับมอบหมายในรายวิชา
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="bio.php" class="px-6 py-3 bg-cyan-500 text-white rounded-lg font-medium hover:bg-cyan-700 transition shadow-md text-center">ทำความรู้จักฉัน</a>
                    <a href="assignment.php" class="px-6 py-3 bg-slate-100 text-slate-700 rounded-lg font-medium hover:bg-slate-200 transition text-center">ดูรายการงาน</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://media.tenor.com/7cQ9-ELrjfYAAAAM/cat-typing-on-keyboard---i%27m-cooking.gif">
            </div>
        </div>
    </main>

<?php
include 'includes/footer.php';
?>

</body>
</html>