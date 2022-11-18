<link rel="stylesheet" href="../Productos/css/bootstrap.min.css">
<link rel="stylesheet" href="../Productos/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="../Productos/css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" href="../Productos/css  /responsive.bootstrap.min.css">
<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
            <th>Extn.</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger</td>
            <td>Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011-04-25</td>
            <td>$320,800</td>
            <td>5421</td>
            <td>t.nixon@datatables.net</td>
        </tr>
        <tr>
            <td>Garrett</td>
            <td>Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011-07-25</td>
            <td>$170,750</td>
            <td>8422</td>
            <td>g.winters@datatables.net</td>
        </tr>
        <tr>
            <td>Ashton</td>
            <td>Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>66</td>
            <td>2009-01-12</td>
            <td>$86,000</td>
            <td>1562</td>
            <td>a.cox@datatables.net</td>
        </tr>
        <tr>
            <td>Cedric</td>
            <td>Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>22</td>
            <td>2012-03-29</td>
            <td>$433,060</td>
            <td>6224</td>
            <td>c.kelly@datatables.net</td>
        </tr>
        <tr>
            <td>Airi</td>
            <td>Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>33</td>
            <td>2008-11-28</td>
            <td>$162,700</td>
            <td>5407</td>
            <td>a.satou@datatables.net</td>
        </tr>
        <tr>
            <td>Brielle</td>
            <td>Williamson</td>
            <td>Integration Specialist</td>
            <td>New York</td>
            <td>61</td>
            <td>2012-12-02</td>
            <td>$372,000</td>
            <td>4804</td>
            <td>b.williamson@datatables.net</td>
        </tr>
        <tr>
            <td>Herrod</td>
            <td>Chandler</td>
            <td>Sales Assistant</td>
            <td>San Francisco</td>
            <td>59</td>
            <td>2012-08-06</td>
            <td>$137,500</td>
            <td>9608</td>
            <td>h.chandler@datatables.net</td>
        </tr>
        <tr>
            <td>Rhona</td>
            <td>Davidson</td>
            <td>Integration Specialist</td>
            <td>Tokyo</td>
            <td>55</td>
            <td>2010-10-14</td>
            <td>$327,900</td>
            <td>6200</td>
            <td>r.davidson@datatables.net</td>
        </tr>
        <tr>
            <td>Colleen</td>
            <td>Hurst</td>
            <td>Javascript Developer</td>
            <td>San Francisco</td>
            <td>39</td>
            <td>2009-09-15</td>
            <td>$205,500</td>
            <td>2360</td>
            <td>c.hurst@datatables.net</td>
        </tr>
    </tbody>
</table>
<script type="text/javascript" src="../Productos/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="../Productos/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" src="../Productos/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="../Productos/js/jquery-3.5.1.js"></script>
<script type="text/javascript" src="../Productos/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../Productos/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable({
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
    });
</script>