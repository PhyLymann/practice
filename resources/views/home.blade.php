@extends('layout.master') 


@section('content')

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
      /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
      
      body {
          font-family: 'Nunito', sans-serif;
      }
      h1{
        font-family: khmer OS System;
        color: white;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
      }
      p{
        font-family: "Gill Sans", sans-serif;
        color: black;
        font-size: 12pt;
      }
  </style>
<body class="antialiased">
   <!--Jumpbostron-->
      <div class="mt-4 p-5 text-white rounded" style="background-color: rgb(11, 189, 189);">
        <h1>Welcome to Beautiful Church of Christ</h1>
        <hr size="4">
        <p><h5>The Beautiful Church of Christ, would like to welcome everyone who would like to know more our church and her ministries. We are ready to give you detail information and the knowledge of God through our website. Our church will give you all more resources such as weekly sermon; Shorter and Larger Catechism; other programs our church is developing. Everyone can come and visit our church in the website or the real church we here wait and serve all of you. We hope our church website will be a place full of resources of the knowledge of God.</h5></p> 
        <a href="/create-post" class="btn btn-info btn-warning" style="font-family: khmer OS System;">Create Post</a>
      </div>

      <div class="row mt-5">
        <div class="col-sm-12">
        <table>
          <tr>
            <th colspan="2">
              <p class="text-white"></p>
              <i class="fa-sharp fa-solid fa-heart"></i></i>&nbsp;ខគម្ពីរលើកទឹកចិត្ត&nbsp;<i class="fa-sharp fa-solid fa-heart"></i>
              <p class="text-white"></p>
            </th>
          </tr>
          <tr>
            <td><span>អេសាយ 41: 10</span> ដូច្នេះ កុំ​ភ័យ​ខ្លាច​ឡើយ ដ្បិត​ខ្ញុំ​នៅ​ជា​មួយ​នឹង​អ្នក​រាល់​គ្នា។ កុំ​ភ័យ​ខ្លាច​ឡើយ ដ្បិត​យើង​ជា​ព្រះ​របស់​អ្នក។ ខ្ញុំនឹងពង្រឹងអ្នកហើយជួយអ្នក; ខ្ញុំនឹងលើកអ្នកដោយដៃស្តាំដ៏សុចរិតរបស់ខ្ញុំ។</td>
            <td><span>យ៉ូហាន 16: 33</span> ខ្ញុំ​បាន​ប្រាប់​អ្នក​រាល់​គ្នា​នូវ​សេចក្ដី​ទាំង​នេះ ដើម្បី​ឲ្យ​អ្នក​បាន​សេចក្ដី​សុខ​ក្នុង​ខ្ញុំ។ ក្នុងលោកនេះ អ្នកនឹងមានបញ្ហា។ ប៉ុន្តែយកបេះដូង! ខ្ញុំបានយកឈ្នះពិភពលោក។</td>
          </tr>
          <tr>
            <td><span>រ៉ូម 15: 13</span> សូម​ឲ្យ​ព្រះ​នៃ​សេចក្ដី​សង្ឃឹម​បំពេញ​អ្នក​ដោយ​សេចក្ដី​អំណរ និង​សេចក្ដី​សុខសាន្ត​គ្រប់​យ៉ាង ដូច​ដែល​អ្នក​ទុក​ចិត្ត​លើ​ទ្រង់ ដើម្បី​ឲ្យ​អ្នក​អាច​ពោរពេញ​ដោយ​សេចក្ដី​សង្ឃឹម ដោយ​អំណាច​នៃ​ព្រះវិញ្ញាណ​បរិសុទ្ធ។</td>
            <td><span>ហេព្រើរ 13: 5</span> ចូរ​រក្សា​ជីវិត​របស់​អ្នក​ឱ្យ​រួច​ផុត​ពី​ការ​ស្រឡាញ់​ប្រាក់ ហើយ​ស្កប់​ចិត្ត​នឹង​អ្វី​ដែល​អ្នក​មាន​ចុះ ព្រោះ​ព្រះជាម្ចាស់​មាន​ព្រះបន្ទូល​ថា “ខ្ញុំនឹងមិនចាកចេញពីអ្នកឡើយ ខ្ញុំនឹងមិនដែលបោះបង់អ្នកឡើយ។</td>
          </tr>
          <tr>
            <td><span>អេភេសូរ 2: 8-9</span> ដ្បិត​វា​គឺ​ដោយ​ព្រះគុណ ដែល​អ្នក​បាន​ត្រូវ​បាន​សង្គ្រោះ ដោយ​សារ​សេចក្ដី​ជំនឿ—ហើយ​នេះ​មិន​មែន​មក​ពី​ខ្លួន​អ្នក​ទេ វា​គឺជា​អំណោយទាន​នៃ​ព្រះ— 9 មិន​មែន​ដោយ​ការ​ងារ​ដើម្បី​កុំ​ឲ្យ​អ្នក​ណា​អួត​ខ្លួន​ឡើយ។</td>
            <td><span>ម៉ាថាយ 22: 37</span> ព្រះយេស៊ូវបានឆ្លើយថា៖ « ចូរ​ស្រឡាញ់​ព្រះអម្ចាស់ ជា​ព្រះ​របស់​អ្នក​ឲ្យ​អស់​អំពី​ចិត្ត អស់​អំពី​ព្រលឹង និង​អស់​អំពី​គំនិត​របស់​អ្នក​។</td>
          </tr>
          <tr>
            <td><span>សុភាសិត 3: 5</span>ជឿទុកចិត្តលើ ព្រះអម្ចាស់ ដោយអស់ពីចិត្ត ហើយកុំពឹងផ្អែកលើការយល់ដឹងរបស់អ្នក។</td>
            <td><span>ម៉ាថាយ 28: 19</span>ដូច្នេះ ចូរ​ទៅ​បញ្ចុះបញ្ចូល​ឲ្យ​មាន​សិស្ស​ពី​គ្រប់​សាសន៍ ហើយ​ធ្វើ​បុណ្យ​ជ្រមុជ​ទឹក​ឲ្យ​គេ​ក្នុង​ព្រះនាម​នៃ​ព្រះវរបិតា និង​នៃ​ព្រះរាជបុត្រា និង​នៃ​ព្រះវិញ្ញាណ​បរិសុទ្ធ</td>
          </tr>
        </table>
        </div>
        </div>
        <style>
          table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            font-family: Khmer OS System;
            font-size:13.5pt;
          }
          th{
            text-align:center;
            background-color: blue;
            color: white;
          }
          span{
            color:red;
          }
          h5{
            font-family: Georgia, serif;
          }
        </style>
        <h3 class="mt-5">All Activities of our church</h3>
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
          <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
              <div class="grid grid-cols-1 md:grid-cols-2">
                @foreach ($posts as $post )
                  <div class="p-6">
                      <div class="ml-12">
                          <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            <img src="{{asset('storage/'.$post->image)}}" class="card-img-top" alt="...">
                          </div>
                      </div>
                      <div class="ml-12 mt-3" style="display: flex;">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                          <h5 class="card-title text-dark">{{ $post->title}}</h5>
                        </div>
                      </div>
                       <div class="ml-12" style="display: flex;">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <i class="fa-solid fa-user-check"></i><small class="badge" style="font-size: 16px; color: darkblue; font-weight: bold;">{{ $post->category? $post->category->name : ''}}</small>
                        </div>
                      </div>
                      
                    <div class="ml-12 mt-3" style="display: flex;">
                      <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <a href="/listing/{{$post->id}}" class="btn btn-info">View Detail</a>
                      </div>
                    </div>
                  </div>
                  @endforeach
              </div>
          </div>
      </div>
  </div>
  <a href="/listing"><button class="btn btn-danger mt-4">See all</button></a>
</body>
@endsection


  