.content {
           padding: 100px;
       }
     
       .row-about {
           display: flex;
           flex-wrap: wrap;
           margin-bottom: 20px;
           border: 2px solid #ddd;
           border-radius: 10px;
           background-color: #fff;
           padding: 1px;
           box-shadow: 0 0 10px rgba(0,0,0,0.1);
       }
       
       .col-sm-4 {
           flex: 1 1 30%;
           box-sizing: border-box;
           padding: 20px;
           margin: 10px;
           border-radius: 10px;
           background-color: #FAFAFA;
           box-shadow: 0 0 5px rgba(0,0,0,0.1);
       }

       .col-sm-4 .icon-wrapper{
           height: 200px;
           background-size: cover;
            background-position: center;
            background-radius:10px;
       }
       
       @media (max-width: 768px) {
           .col-sm-4 {
               flex: 1 1 100%;
               margin: 5px;
           }
       }

       p.card-title {
        font-size: 2.3rem;
        color: #50a0fa;
        text-transform: uppercase;
        white-space: nowrap;
       }

       p.card-text- {
         font-size: 2.3rem;
         line-height: 1.5;
         margin-top: 10px
       }