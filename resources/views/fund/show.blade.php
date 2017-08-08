@extends('fund.fund')
@section('text-content')
    <div class="fund-show">
        <h2>产品概况</h2>
        <table width="860" border="0" cellpadding="0" cellspacing="0" class="fund-table">
            <tbody>
            <tr class="odd">
                <td class="prop" width="130">产品全称：</td>
                <td class="val"  colspan="3">{{$funds->title}}														</td>
            </tr>
            <tr class="even">
                <td class="prop" width="130">产品类型：</td>
                <td class="val" width="275">{{$funds->productType}}</td>
                <td class="prop" width="130">管理人：</td>
                <td class="val">{{$funds->manager}}</td>
            </tr>
            <tr class="odd">
                <td class="prop" width="130">预期收益：</td>
                <td class="val">{{$funds->profit}}</td>
                <td class="prop" width="130">利息分配：</td>
                <td class="val">{{$funds->interest}}</td>
            </tr>
            <tr class="even">
                <td class="prop" width="130">募集规模：</td>
                <td class="val">{{$funds->scale}}</td>
                <td class="prop" width="130">认购起点：</td>
                <td class="val">{{$funds->origin}}</td>
            </tr>
            <tr class="odd">
                <td class="prop" width="130">产品期限：</td>
                <td class="val">{{$funds->deadline}}</td>
                <td class="prop" width="130">募集期：</td>
                <td class="val">{{$funds->fundraise}}</td>
            </tr>
            <tr class="even">
                <td class="prop" width="130">管理费：</td>
                <td class="val">{{$funds->overhead}}</td>
                <td class="prop" width="130">托管费：</td>
                <td class="val">{{$funds->trustee}}</td>
            </tr>
            <tr class="odd">
                <td class="prop" width="130">主要投资领域：</td>
                <td class="val">{{$funds->field}}</td>
                <td class="prop" width="130">产品状态：</td>
                <td class="val">{{$funds->status}}</td>
            </tr>
            </tbody>
        </table>

    </div>
    <div class="fund-show">
        <h2>融资方介绍</h2>
        <p>
            {{$funds->introduce}}
        </p>
    </div>
    <div class="fund-show">
        <h2>基金用途</h2>
        <p>
            {{$funds->used}}
        </p>
    </div>
    <div class="fund-show">
        <h2>还款来源</h2>
        <p>
            {{$funds->refund}}
        </p>

    </div>
    <div class="fund-show">
        <h2>风控措施</h2>
        <p>
            {{$funds->risk}}
        </p>
    </div>
@endsection