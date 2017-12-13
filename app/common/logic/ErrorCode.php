<?php
namespace app\common\logic;

class ErrorCode
{
	const error = [
	    0 => 'SUCCESS',
        9000 => '用户名错误',
	    9001 => '手机号格式错误',
        9002 => '验证码格式错误',
        9003 => '验证码错误',
        9004 => '不存在手机号为该号码的管理员',
        9005 => '用户名或密码错误',
        9006 => '该管理员已被锁定',
        9007 => '该管理员已被删除',
        9008 => 'create_auth.sql文件不存在！',
        9009 => '执行create_auth.sql失败！',
        9010 => '菜单名称不能为空',
        9011 => '菜单url不能为空',
        9012 => '菜单url格式错误，应为 a/b 格式',
        9013 => '非法参数',
        9014 => '激活/禁用菜单失败',
        9015 => '删除菜单失败',
        9016 => '更新数据失败',
        9017 => '数据未改变',
        9018 => '菜单地址已存在',
        9019 => '激活/禁用角色失败',
        9020 => '删除角色失败',
        9021 => '激活/禁用管理员失败',
        9022 => '删除管理员失败',
        9023 => '角色名不能为空',
        9024 => '角色名已存在',
        9025 => '用户名不能为空',
        9026 => '用户名已存在',
        9027 => '手机号不能为空',
        9028 => '手机号已存在',
        9029 => '管理员姓名不能为空',
        9030 => '用户名格式错误',

        9090 => '用户所属角色组已被禁用或删除，请联系管理员',
        9998 => '非法操作',
        9999 => '更新数据失败,请查看错误日志',
        10000 => 'no auth',
    ];

	//管理员状态对应错误码
	const admin_status = [
        1 => 9006,
        9 => 9007,
    ];
}
