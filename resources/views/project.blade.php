@extends('layout.app')

@section('content')
<section class="ftco-section" id="project-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h1 class="big big-2">Projects</h1>
          <h2 class="mb-4">Projects</h2>
          <p>Below are the sample Data Analytics projects on SQL, Python, Power BI & ML.</p>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <a href="https://github.com/rishabhnmishra/SQL_Music_Store_Analysis/blob/main/Music_Store_Query.sql" class="block-20 zoom-effect" style="background-image: url('images/proj_1.jpg');">
            </a>
            <div class="text mt-3 float-right d-block">

              <h3 class="heading"><a href="https://github.com/rishabhnmishra/SQL_Music_Store_Analysis/blob/main/Music_Store_Query.sql">Digital Music Store Data Analysis using SQL</a></h3>
              <p>Analyzed music store data using advanced SQL queires to identify gaps and increase the business growth.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <a href="https://github.com/rishabhnmishra/Python_Diwali_Sales_Analysis/blob/main/Diwali_Sales_Analysis.ipynb" class="block-20 zoom-effect" style="background-image: url('images/proj_2.jpg');">
            </a>
            <div class="text mt-3 float-right d-block">

              <h3 class="heading"><a href="https://github.com/rishabhnmishra/Python_Diwali_Sales_Analysis/blob/main/Diwali_Sales_Analysis.ipynb">Data Analysis using Python Project for Beginners</a></h3>
              <p>Performed exploratory data analysis on diwali sales data using Python to improve the customer experience.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry">
            <a href="https://github.com/rishabhnmishra/Madhav_Store_Analysis_PowerBI/blob/main/Madhav%20Store%20dashboard.jpg" class="block-20 zoom-effect" style="background-image: url('images/proj_3.jpg');">
            </a>
            <div class="text mt-3 float-right d-block">

              <h3 class="heading"><a href="https://github.com/rishabhnmishra/Madhav_Store_Analysis_PowerBI/blob/main/Madhav%20Store%20dashboard.jpg">Power BI Sales dashboard Project for Beginners</a></h3>
              <p>Designed a power bi dashboard for Madhav Store to track and analyze the online sales data acorss India.</p>
            </div>
          </div>
        </div>
      </div>
  <br>
      <!-- added justify-content-center to center align the last two projects -->
      <div class="row d-flex justify-content-center">
          <div class="col-md-4 d-flex ftco-animate">
              <div class="blog-entry justify-content-end">
              <a href="https://github.com/rishabhnmishra/sales_forecasting/tree/main" class="block-20 zoom-effect" style="background-image: url('images/proj_4.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">

                <h3 class="heading"><a href="https://github.com/rishabhnmishra/sales_forecasting/tree/main">Sales Forecast- Time Series Forecasting</a></h3>
                <p>Used multiple machine learning models to forecast sales (retail store) and performed time series analysis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
              <div class="blog-entry justify-content-end">
              <a href="https://github.com/rishabhnmishra/customer_segmentation/blob/main/Customer_Segmentation-final.ipynb" class="block-20 zoom-effect" style="background-image: url('images/proj_5.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">

                <h3 class="heading"><a href="https://github.com/rishabhnmishra/customer_segmentation/blob/main/Customer_Segmentation-final.ipynb">Customer Segmentation using clustering model</a></h3>
                <p>Developed a ML model to give various recommendations of financial products &amp; services on target customer groups.</p>
              </div>
            </div>
          </div>
       </div>
    </div>
  </section>

@endsection

