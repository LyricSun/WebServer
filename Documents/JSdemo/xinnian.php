<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title></title>
    <script type="text/javascript">
        var _i=0;
        var _j=0;

        var len=3;
        var scrollrgb;

        var te2_j=1;
        var te2_jB=28;
        var te2B=8;

        var te3i=1;
        var te3j=1;
        var te3_iB=1;
        var te3_jB=1;

        var te4_js=50;

        var te2Time;
        var te3Time;
        var te4Time;

        var zorZ2=1;

        //"新年"两个字所占的格子
        var z=new Array("2_4","2_10","3_2","3_3","3_4","3_5","3_6","3_9","4_3","4_5","4_8","4_9","5_1","5_2","5_3","5_4",
            "5_5","5_6","5_7","5_8","5_9","5_10","5_11","5_12","5_13","6_8","6_12","7_3","7_4","7_5","7_8","7_12","8_4","8_8",
            "8_12","9_2","9_3","9_4","9_5","9_6","9_8","9_12","10_4","10_8","10_12","11_2","11_4","11_6","11_8","11_12","12_1",
            "12_4","12_7","12_8","12_12","13_3","13_4","13_6","13_7","13_12","2_20","2_21","3_19","3_20","4_19","4_20","4_21",
            "4_22","4_23","4_24","4_25","4_26","4_27","5_17","5_18","5_23","6_16","6_17","6_20","6_21","6_22","6_23","6_24","6_25",
            "6_26","7_15","7_16","7_20","7_23","8_20","8_23","9_17","9_18","9_19","9_20","9_21","9_22","9_23","9_24","9_25","9_26",
            "9_27","9_28","10_23","11_23","12_23","13_23");

        //"快乐"两个字所占的格子
        var z2=new Array("2_3","2_8","2_19","2_20","2_21","2_22","2_23","2_24","2_25","3_3","3_8","3_17","3_18","4_3","4_6","4_7","4_8",
            "4_9","4_10","4_11","4_17","4_22","5_1","5_3","5_8","5_11","5_17","5_22","6_1","6_3","6_4","6_8","6_11","6_17","6_22","7_1","7_3",
            "7_5","7_6","7_7","7_8","7_9","7_10","7_11","7_12","7_16","7_17","7_18","7_19","7_20","7_21","7_22","7_23","7_24","7_25","7_26",
            "7_27","8_1","8_3","8_7","8_9","8_22","9_3","9_6","9_10","9_22","10_3","10_5","10_11","10_18","10_19","10_24","10_25","11_3","11_4",
            "11_5","11_12","11_13","11_17","11_22","11_26","12_3","12_13","12_20","12_22","13_3","13_21","13_22","10_22");


        function createNHD()
        {
            var tabobj=document.createElement("table");
            tabobj.cellSpacing="0px";
            tabobj.style.width="400px";
            tabobj.style.height="200px";
            tabobj.border="1";
            tabobj.borderColor="gray";

            var tbodyobj=document.createElement("tbody");


            for(var i=0;i<15;i++)
            {
                var trobj=document.createElement("tr");

                for(var j=0;j<30;j++)
                {
                    var tdobj=document.createElement("td");

                    tdobj.id=i+"_"+j

                    var textobj=document.createTextNode(" ");

                    tdobj.appendChild(textobj);

                    trobj.appendChild(tdobj);
                }
                tbodyobj.appendChild(trobj);
            }

            tabobj.appendChild(tbodyobj);

            document.getElementById("nhd_id").appendChild(tabobj);

            teXiao1();
            teXiao2();

        }

        function teXiao1()
        {
            setTimeout("teXiao1()",10);

            if(_i==0 && _j==0)
            {
                scrollrgb=randomRGB();
            }

            if(_i==0 && _j<29)
                scroll(0,1);
            else if(_i<14 && _j==29)
                scroll(1,0);
            else if(_i==14 && _j>0)
                scroll(0,-1);
            else if(_i>0 && _j==0)
                scroll(-1,0);
        }

        function randomRGB()
        {
            return Math.round(Math.random()*255)+","+Math.round(Math.random()*255)+","+Math.round(Math.random()*255);
        }

        function scroll(i,j)
        {
            _i=_i+i;
            _j=_j+j;

            document.getElementById(_i+"_"+_j).style.backgroundColor="rgb("+scrollrgb+")";
        }

        function teXiao2()
        {
            te2Time=setTimeout("teXiao2()",10);

            for(var i=1;i<=13;i++)
            {
                document.getElementById(i+"_"+te2_j).style.backgroundColor="rgb(180,0,"+te2B+")";
                if(te2_j!=1)
                    document.getElementById(i+"_"+(te2_j-1)).style.backgroundColor="";
            }

            if(te2_j<te2_jB)
                te2_j++;
            else
            {
                te2_j=1;
                te2_jB=te2_jB-1;
                te2B=te2B+8;
            }

            if(te2_jB==0)
            {
                clearTimeout(te2Time);

                te2_j=1;
                te2_jB=28;
                te2B=8;

                teXiao3();
            }
        }

        function teXiao3()
        {
            te3Time=setTimeout("teXiao3()",100);

            while(true)
            {
                if(isX(te3i+"_"+te3j))
                    document.getElementById(te3i+"_"+te3j).style.backgroundColor="";

                if(te3i==13 || te3j==1)
                {
                    if(te3_jB<28)
                        te3_jB++;
                    else
                        te3_iB++;

                    te3i=te3_iB;
                    te3j=te3_jB;

                    if(te3_iB==14)
                    {
                        clearTimeout(te3Time);

                        te3i=1;
                        te3j=1;
                        te3_iB=1;
                        te3_jB=1;

                        teXiao4()
                    }

                    break;
                }
                else
                {
                    te3i++;
                    te3j--;
                }
            }
        }

        function teXiao4()
        {
            te4Time=setTimeout("teXiao4()",100);

            if(zorZ2==1)
                arr=z;
            else
                arr=z2;

            for(var i=0;i<arr.length;i++)
            {
                document.getElementById(arr[i]).style.backgroundColor="rgb("+randomRGB()+")";
            }

            te4_js--;

            if(te4_js==0)
            {
                clearTimeout(te4Time);

                if(zorZ2==1)
                    zorZ2=2;
                else
                    zorZ2=1;

                te4_js=50;

                teXiao2();
            }
        }

        function isX(id)
        {
            var isExists=true;

            var arr=null;

            if(zorZ2==1)
                arr=z;
            else
                arr=z2;

            for(var i=0;i<arr.length;i++)
            {
                if(arr[i]==id)
                {
                    isExists=false;
                    break;
                }
            }

            return isExists;
        }
    </script>
</head>
<body onload="createNHD()" style="background-color:black;">
<br><br><br>
<div id="nhd_id" style="width:100%" align="center"></div>
</body>
</html>
