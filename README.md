# API 文档

> 本文档由自动生成工具创建于 2025-09-17 12:56:05

## 📁 目录索引


<div id="start"></div>


- **[ai](#api-ai)**
  - [`getAiCharacter`](#api-ai-getaicharacter)
  - [`getAiRecord`](#api-ai-getairecord)
  - [`sendGroupAiRecord`](#api-ai-sendgroupairecord)

- **[app](#api-app)**
  - [`__construct`](#api-app-__construct)

- **[bot](#api-bot)**
  - [`init`](#api-bot-init)
  - [`getLoginInfo`](#api-bot-getlogininfo)
  - [`setQQProfile`](#api-bot-setqqprofile)
  - [`getModelShow`](#api-bot-getmodelshow)
  - [`setModelShow`](#api-bot-setmodelshow)
  - [`getOnlineClients`](#api-bot-getonlineclients)

- **[cqHttp](#api-cqhttp)**
  - [`getCookies`](#api-cqhttp-getcookies)
  - [`getClientKey`](#api-cqhttp-getclientkey)
  - [`getSkey`](#api-cqhttp-getskey)
  - [`getCsrfToken`](#api-cqhttp-getcsrftoken)
  - [`getCredentials`](#api-cqhttp-getcredentials)
  - [`getVersionInfo`](#api-cqhttp-getversioninfo)
  - [`getStatus`](#api-cqhttp-getstatus)
  - [`setRestart`](#api-cqhttp-setrestart)
  - [`reloadEventFilter`](#api-cqhttp-reloadeventfilter)
  - [`downloadFilter`](#api-cqhttp-downloadfilter)
  - [`checkUrlSafely`](#api-cqhttp-checkurlsafely)
  - [`cleanCache`](#api-cqhttp-cleancache)

- **[file](#api-file)**
  - [`uploadPrivateFile`](#api-file-uploadprivatefile)
  - [`uploadGroupFile`](#api-file-uploadgroupfile)
  - [`deleteGroupFile`](#api-file-deletegroupfile)
  - [`createGroupFileFolder`](#api-file-creategroupfilefolder)
  - [`deleteGroupFolder`](#api-file-deletegroupfolder)
  - [`getGroupFileSystemInfo`](#api-file-getgroupfilesysteminfo)
  - [`getGroupRootFiles`](#api-file-getgrouprootfiles)
  - [`getGroupRootFilesByFolder`](#api-file-getgrouprootfilesbyfolder)
  - [`getGroupFileUrl`](#api-file-getgroupfileurl)

- **[friend](#api-friend)**
  - [`getStrangerInfo`](#api-friend-getstrangerinfo)
  - [`getFriendList`](#api-friend-getfriendlist)
  - [`getUnidirectionalFriendList`](#api-friend-getunidirectionalfriendlist)
  - [`deleteFriend`](#api-friend-deletefriend)
  - [`deleteUnidirectionalFriend`](#api-friend-deleteunidirectionalfriend)

- **[groupInfo](#api-groupinfo)**
  - [`getGroupInfo`](#api-groupinfo-getgroupinfo)
  - [`getGroupList`](#api-groupinfo-getgrouplist)
  - [`getGroupMemberInfo`](#api-groupinfo-getgroupmemberinfo)
  - [`getGroupMemberList`](#api-groupinfo-getgroupmemberlist)
  - [`getGroupHonorInfo`](#api-groupinfo-getgrouphonorinfo)
  - [`getGroupSystemMsg`](#api-groupinfo-getgroupsystemmsg)
  - [`getEssenceMsgList`](#api-groupinfo-getessencemsglist)
  - [`getGroupAtAllRemain`](#api-groupinfo-getgroupatallremain)

- **[groupSetup](#api-groupsetup)**
  - [`setGroupName`](#api-groupsetup-setgroupname)
  - [`setGroupPortrait`](#api-groupsetup-setgroupportrait)
  - [`setGroupAdmin`](#api-groupsetup-setgroupadmin)
  - [`setGroupCard`](#api-groupsetup-setgroupcard)
  - [`setGroupSpecialTitle`](#api-groupsetup-setgroupspecialtitle)
  - [`setGroupBan`](#api-groupsetup-setgroupban)
  - [`setGroupWholeBan`](#api-groupsetup-setgroupwholeban)
  - [`setGroupAnonymousBan`](#api-groupsetup-setgroupanonymousban)
  - [`setEssenceMsg`](#api-groupsetup-setessencemsg)
  - [`sendGroupSign`](#api-groupsetup-sendgroupsign)
  - [`setGroupAnonymous`](#api-groupsetup-setgroupanonymous)
  - [`sendGroupNotice`](#api-groupsetup-sendgroupnotice)
  - [`getGroupNotice`](#api-groupsetup-getgroupnotice)
  - [`setGroupKick`](#api-groupsetup-setgroupkick)
  - [`setGroupLeave`](#api-groupsetup-setgroupleave)

- **[handle](#api-handle)**
  - [`setFriendAddRequest`](#api-handle-setfriendaddrequest)
  - [`setGroupAddRequest`](#api-handle-setgroupaddrequest)

- **[image](#api-image)**
  - [`getImage`](#api-image-getimage)
  - [`canSendImage`](#api-image-cansendimage)
  - [`ocrImage`](#api-image-ocrimage)

- **[message](#api-message)**
  - [`sendPrivateMsg`](#api-message-sendprivatemsg)
  - [`sendGroupMsg`](#api-message-sendgroupmsg)
  - [`sendMsg`](#api-message-sendmsg)
  - [`sendMarkdownMsg`](#api-message-sendmarkdownmsg)
  - [`sendGreyTip`](#api-message-sendgreytip)
  - [`sendKeyboardMsg`](#api-message-sendkeyboardmsg)
  - [`getMsg`](#api-message-getmsg)
  - [`deleteMsg`](#api-message-deletemsg)
  - [`markMsgAsRead`](#api-message-markmsgasread)
  - [`getForwardMsg`](#api-message-getforwardmsg)
  - [`sendForwardMsg`](#api-message-sendforwardmsg)
  - [`sendGroupForwardMsg`](#api-message-sendgroupforwardmsg)
  - [`sendPrivateForwardMsg`](#api-message-sendprivateforwardmsg)
  - [`getGroupMsgHistory`](#api-message-getgroupmsghistory)
  - [`escape`](#api-message-escape)
  - [`structureImage`](#api-message-structureimage)
  - [`structureVideo`](#api-message-structurevideo)
  - [`structureRecord`](#api-message-structurerecord)
  - [`structureFace`](#api-message-structureface)
  - [`structureMagic`](#api-message-structuremagic)
  - [`structureGift`](#api-message-structuregift)
  - [`structurePoke`](#api-message-structurepoke)
  - [`structureShare`](#api-message-structureshare)
  - [`structureContact`](#api-message-structurecontact)
  - [`structureLocation`](#api-message-structurelocation)
  - [`structureMusic`](#api-message-structuremusic)
  - [`structureReply`](#api-message-structurereply)
  - [`structureNode`](#api-message-structurenode)
  - [`structureCard`](#api-message-structurecard)
  - [`structureTts`](#api-message-structuretts)
  - [`structureText`](#api-message-structuretext)
  - [`structureTextPro`](#api-message-structuretextpro)
  - [`structureAt`](#api-message-structureat)
  - [`structureJson`](#api-message-structurejson)
  - [`structureMarkdown`](#api-message-structuremarkdown)
  - [`structureLongMsg`](#api-message-structurelongmsg)
  - [`structureKeyboard`](#api-message-structurekeyboard)
  - [`structureGreyTip`](#api-message-structuregreytip)

- **[record](#api-record)**
  - [`getRecord`](#api-record-getrecord)
  - [`canSendRecord`](#api-record-cansendrecord)

- **[uin](#api-uin)**
  - [`__construct`](#api-uin-__construct)
  - [`get`](#api-uin-get)
  - [`set`](#api-uin-set)
  - [`data`](#api-uin-data)

- **[Cache](#utils-cache)**
  - [`get`](#utils-cache-get)
  - [`set`](#utils-cache-set)
  - [`del`](#utils-cache-del)
  - [`getBatch`](#utils-cache-getbatch)
  - [`setBatch`](#utils-cache-setbatch)
  - [`__callStatic`](#utils-cache-__callstatic)

- **[CommandParser](#utils-commandparser)**
  - [`getInstance`](#utils-commandparser-getinstance)
  - [`command`](#utils-commandparser-command)
  - [`option`](#utils-commandparser-option)
  - [`getHelp`](#utils-commandparser-gethelp)
  - [`parse`](#utils-commandparser-parse)

- **[CoroutineCurl](#utils-coroutinecurl)**
  - [`__construct`](#utils-coroutinecurl-__construct)
  - [`init`](#utils-coroutinecurl-init)
  - [`location`](#utils-coroutinecurl-location)
  - [`addHeaders`](#utils-coroutinecurl-addheaders)
  - [`setHeaders`](#utils-coroutinecurl-setheaders)
  - [`get`](#utils-coroutinecurl-get)
  - [`post`](#utils-coroutinecurl-post)
  - [`request`](#utils-coroutinecurl-request)
  - [`accept`](#utils-coroutinecurl-accept)
  - [`timeout`](#utils-coroutinecurl-timeout)
  - [`encode`](#utils-coroutinecurl-encode)
  - [`proxy`](#utils-coroutinecurl-proxy)
  - [`json`](#utils-coroutinecurl-json)
  - [`object`](#utils-coroutinecurl-object)
  - [`string`](#utils-coroutinecurl-string)
  - [`__toString`](#utils-coroutinecurl-__tostring)

- **[Env](#utils-env)**
  - [`get`](#utils-env-get)
  - [`refreshCache`](#utils-env-refreshcache)
  - [`getAll`](#utils-env-getall)
  - [`Config`](#utils-env-config)

- **[Git](#utils-git)**
  - [`getInstance`](#utils-git-getinstance)
  - [`setBasePath`](#utils-git-setbasepath)
  - [`getBasePath`](#utils-git-getbasepath)
  - [`clone`](#utils-git-clone)
  - [`pull`](#utils-git-pull)
  - [`branch`](#utils-git-branch)
  - [`commit`](#utils-git-commit)
  - [`getCommits`](#utils-git-getcommits)
  - [`getCurrentBranch`](#utils-git-getcurrentbranch)
  - [`delete`](#utils-git-delete)

- **[Logger](#utils-logger)**
  - [`init`](#utils-logger-init)
  - [`configure`](#utils-logger-configure)
  - [`message`](#utils-logger-message)
  - [`success`](#utils-logger-success)
  - [`error`](#utils-logger-error)
  - [`info`](#utils-logger-info)
  - [`warning`](#utils-logger-warning)
  - [`debug`](#utils-logger-debug)
  - [`tput`](#utils-logger-tput)
  - [`enableConsole`](#utils-logger-enableconsole)
  - [`enableFile`](#utils-logger-enablefile)

- **[Markdown](#utils-markdown)**
  - [`__construct`](#utils-markdown-__construct)
  - [`render`](#utils-markdown-render)
  - [`action`](#utils-markdown-action)
  - [`id`](#utils-markdown-id)
  - [`permission`](#utils-markdown-permission)
  - [`next`](#utils-markdown-next)
  - [`prev`](#utils-markdown-prev)
  - [`current`](#utils-markdown-current)
  - [`buttons`](#utils-markdown-buttons)
  - [`url`](#utils-markdown-url)
  - [`Image`](#utils-markdown-image)
  - [`markdown`](#utils-markdown-markdown)
  - [`at`](#utils-markdown-at)
  - [`Face`](#utils-markdown-face)
  - [`add`](#utils-markdown-add)
  - [`cleanMarkdown`](#utils-markdown-cleanmarkdown)
  - [`cleanButton`](#utils-markdown-cleanbutton)
  - [`clean`](#utils-markdown-clean)
  - [`get`](#utils-markdown-get)
  - [`send`](#utils-markdown-send)
  - [`bind`](#utils-markdown-bind)
  - [`escape`](#utils-markdown-escape)

- **[Operate](#utils-operate)**
  - [`get`](#utils-operate-get)
  - [`set`](#utils-operate-set)
  - [`dir`](#utils-operate-dir)
  - [`read_all`](#utils-operate-read_all)
  - [`readAll`](#utils-operate-readall)
  - [`read_all_dir`](#utils-operate-read_all_dir)
  - [`read_all_dir_list`](#utils-operate-read_all_dir_list)
  - [`readAllDir`](#utils-operate-readalldir)
  - [`readFile`](#utils-operate-readfile)
  - [`unzip`](#utils-operate-unzip)
  - [`xCopy`](#utils-operate-xcopy)
  - [`delDir`](#utils-operate-deldir)
  - [`del_dir`](#utils-operate-del_dir)
  - [`delfile`](#utils-operate-delfile)
  - [`del_file`](#utils-operate-del_file)

- **[PluginManager](#utils-pluginmanager)**
  - [`__construct`](#utils-pluginmanager-__construct)
  - [`readPluginConfig`](#utils-pluginmanager-readpluginconfig)
  - [`installPluginDeps`](#utils-pluginmanager-installplugindeps)
  - [`loadPluginAutoload`](#utils-pluginmanager-loadpluginautoload)

- **[Route](#utils-route)**
  - [`get`](#utils-route-get)
  - [`post`](#utils-route-post)
  - [`put`](#utils-route-put)
  - [`delete`](#utils-route-delete)
  - [`any`](#utils-route-any)
  - [`match`](#utils-route-match)
  - [`registerByAnnotation`](#utils-route-registerbyannotation)
  - [`clear`](#utils-route-clear)
  - [`getRoutes`](#utils-route-getroutes)
  - [`hasRoute`](#utils-route-hasroute)

- **[Worker](#utils-worker)**
  - [`getInstance`](#utils-worker-getinstance)
  - [`getWorkerList`](#utils-worker-getworkerlist)
  - [`addWorker`](#utils-worker-addworker)
  - [`removeWorker`](#utils-worker-removeworker)

- **[Yargs](#utils-yargs)**
  - [`getInstance`](#utils-yargs-getinstance)
  - [`command`](#utils-yargs-command)
  - [`option`](#utils-yargs-option)
  - [`positional`](#utils-yargs-positional)
  - [`getHelp`](#utils-yargs-gethelp)
  - [`parse`](#utils-yargs-parse)


<a id="api-ai"></a>

## ai 类

> 完整类名: `Api\ai`

### 📋 可用方法

**方法导航**: [`getAiCharacter`](#api-ai-getaicharacter) | [`getAiRecord`](#api-ai-getairecord) | [`sendGroupAiRecord`](#api-ai-sendgroupairecord)

<a id="api-ai-getaicharacter"></a>

#### `getAiCharacter`

- **参数**:
    - `type` int 类型，1 tts，2 song

- **返回**: `Object` 

[↩️ 返回类目录](#api-ai) | [⬆️ 返回顶部](#start)

<a id="api-ai-getairecord"></a>

#### `getAiRecord`

- **参数**:
    - `character` string 语音声音，可通过getAiCharacter获取
    - `group` float 群号
    - `content` string 音频内容

- **返回**: `Object` 

[↩️ 返回类目录](#api-ai) | [⬆️ 返回顶部](#start)

<a id="api-ai-sendgroupairecord"></a>

#### `sendGroupAiRecord`

- **参数**:
    - `character` string 语音声音，可通过getAiCharacter获取
    - `group` float 群号
    - `content` string 音频内容

- **返回**: `Object` 

[↩️ 返回类目录](#api-ai) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-app"></a>

## app 类

> 完整类名: `Api\app`

### 📋 可用方法

**方法导航**: [`__construct`](#api-app-__construct)

<a id="api-app-__construct"></a>

#### `__construct`

[↩️ 返回类目录](#api-app) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-bot"></a>

## bot 类

> 完整类名: `Api\bot`

### 📋 可用方法

**方法导航**: [`init`](#api-bot-init) | [`getLoginInfo`](#api-bot-getlogininfo) | [`setQQProfile`](#api-bot-setqqprofile) | [`getModelShow`](#api-bot-getmodelshow) | [`setModelShow`](#api-bot-setmodelshow) | [`getOnlineClients`](#api-bot-getonlineclients)

<a id="api-bot-init"></a>

#### `init` `(static)`

[↩️ 返回类目录](#api-bot) | [⬆️ 返回顶部](#start)

<a id="api-bot-getlogininfo"></a>

#### `getLoginInfo`

- **返回**: `object` 

[↩️ 返回类目录](#api-bot) | [⬆️ 返回顶部](#start)

<a id="api-bot-setqqprofile"></a>

#### `setQQProfile`

- **参数**:
    - `nickname` string 名称
    - `company` ?string 公司
    - `email` ?string 邮箱
    - `college` ?string 学校
    - `personal_note` ?string 个人介绍

- **返回**: `void` 

[↩️ 返回类目录](#api-bot) | [⬆️ 返回顶部](#start)

<a id="api-bot-getmodelshow"></a>

#### `getModelShow`

- **参数**:
    - `model` string 机型名称

- **返回**: `object` 

[↩️ 返回类目录](#api-bot) | [⬆️ 返回顶部](#start)

<a id="api-bot-setmodelshow"></a>

#### `setModelShow`

- **参数**:
    - `model` string 机型名称
    - `model_show` string -

- **返回**: `object` 

[↩️ 返回类目录](#api-bot) | [⬆️ 返回顶部](#start)

<a id="api-bot-getonlineclients"></a>

#### `getOnlineClients`

- **参数**:
    - `cache` bool 是否无视缓存

- **返回**: `object` 

[↩️ 返回类目录](#api-bot) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-cqhttp"></a>

## cqHttp 类

> 完整类名: `Api\cqHttp`

### 📋 可用方法

**方法导航**: [`getCookies`](#api-cqhttp-getcookies) | [`getClientKey`](#api-cqhttp-getclientkey) | [`getSkey`](#api-cqhttp-getskey) | [`getCsrfToken`](#api-cqhttp-getcsrftoken) | [`getCredentials`](#api-cqhttp-getcredentials) | [`getVersionInfo`](#api-cqhttp-getversioninfo) | [`getStatus`](#api-cqhttp-getstatus) | [`setRestart`](#api-cqhttp-setrestart) | [`reloadEventFilter`](#api-cqhttp-reloadeventfilter) | [`downloadFilter`](#api-cqhttp-downloadfilter) | [`checkUrlSafely`](#api-cqhttp-checkurlsafely) | [`cleanCache`](#api-cqhttp-cleancache)

<a id="api-cqhttp-getcookies"></a>

#### `getCookies`

- **参数**:
    - `domain` ?string Cookie域名，例如：vip.qq.com、y.qq.com、qun.qq.com;

- **返回**: `object` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

<a id="api-cqhttp-getclientkey"></a>

#### `getClientKey`

- **返回**: `object` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

<a id="api-cqhttp-getskey"></a>

#### `getSkey`

- **参数**:
    - `domain` ?string Cookie域名，例如：vip.qq.com、y.qq.com、qun.qq.com;

- **返回**: `object` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

<a id="api-cqhttp-getcsrftoken"></a>

#### `getCsrfToken`

- **返回**: `object` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

<a id="api-cqhttp-getcredentials"></a>

#### `getCredentials`

- **参数**:
    - `domain` ?string Cookie域名，例如：vip.qq.com、y.qq.com、qun.qq.com;

- **返回**: `object` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

<a id="api-cqhttp-getversioninfo"></a>

#### `getVersionInfo`

- **返回**: `object` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

<a id="api-cqhttp-getstatus"></a>

#### `getStatus`

- **返回**: `object` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

<a id="api-cqhttp-setrestart"></a>

#### `setRestart`

- **参数**:
    - `delay` float 延迟时间，默认2000毫秒，最小2000

- **返回**: `void` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

<a id="api-cqhttp-reloadeventfilter"></a>

#### `reloadEventFilter`

- **参数**:
    - `file` string 过滤文件

- **返回**: `void` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

<a id="api-cqhttp-downloadfilter"></a>

#### `downloadFilter`

- **参数**:
    - `url` string 链接
    - `thread_count` int 线程数量
    - `headers` string|array 头部 ["User-Agent=YOUR_UA","Referer=https://www.baidu.com"] 或者 User-Agent=YOUR_UA\nReferer=https://www.baidu.com

- **返回**: `object` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

<a id="api-cqhttp-checkurlsafely"></a>

#### `checkUrlSafely`

- **参数**:
    - `url` string 链接

- **返回**: `object` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

<a id="api-cqhttp-cleancache"></a>

#### `cleanCache`

- **返回**: `void` 

[↩️ 返回类目录](#api-cqhttp) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-file"></a>

## file 类

> 完整类名: `Api\file`

### 📋 可用方法

**方法导航**: [`uploadPrivateFile`](#api-file-uploadprivatefile) | [`uploadGroupFile`](#api-file-uploadgroupfile) | [`deleteGroupFile`](#api-file-deletegroupfile) | [`createGroupFileFolder`](#api-file-creategroupfilefolder) | [`deleteGroupFolder`](#api-file-deletegroupfolder) | [`getGroupFileSystemInfo`](#api-file-getgroupfilesysteminfo) | [`getGroupRootFiles`](#api-file-getgrouprootfiles) | [`getGroupRootFilesByFolder`](#api-file-getgrouprootfilesbyfolder) | [`getGroupFileUrl`](#api-file-getgroupfileurl)

<a id="api-file-uploadprivatefile"></a>

#### `uploadPrivateFile`

- **参数**:
    - `qq` float 群号
    - `file` string 文件路径，必须是本地
    - `name` string 文件名称

- **返回**: `object` 

[↩️ 返回类目录](#api-file) | [⬆️ 返回顶部](#start)

<a id="api-file-uploadgroupfile"></a>

#### `uploadGroupFile`

- **参数**:
    - `group` float 群号
    - `file` string 文件路径，必须是本地
    - `name` string 储存名称
    - `folder` string 父目录id，默认是根目录

- **返回**: `object` 

[↩️ 返回类目录](#api-file) | [⬆️ 返回顶部](#start)

<a id="api-file-deletegroupfile"></a>

#### `deleteGroupFile`

- **参数**:
    - `group` float 群号
    - `file_id` string 文件id
    - `busid` int 文件类型

- **返回**: `void` 

[↩️ 返回类目录](#api-file) | [⬆️ 返回顶部](#start)

<a id="api-file-creategroupfilefolder"></a>

#### `createGroupFileFolder`

- **参数**:
    - `group` float 群号
    - `name` string 文件夹名字

- **返回**: `void` 

[↩️ 返回类目录](#api-file) | [⬆️ 返回顶部](#start)

<a id="api-file-deletegroupfolder"></a>

#### `deleteGroupFolder`

- **参数**:
    - `group` float 群号
    - `folder_id` string 文件夹id

- **返回**: `void` 

[↩️ 返回类目录](#api-file) | [⬆️ 返回顶部](#start)

<a id="api-file-getgroupfilesysteminfo"></a>

#### `getGroupFileSystemInfo`

- **参数**:
    - `group` float 群号

- **返回**: `object` 

[↩️ 返回类目录](#api-file) | [⬆️ 返回顶部](#start)

<a id="api-file-getgrouprootfiles"></a>

#### `getGroupRootFiles`

- **参数**:
    - `group` float 群号

- **返回**: `object` 

[↩️ 返回类目录](#api-file) | [⬆️ 返回顶部](#start)

<a id="api-file-getgrouprootfilesbyfolder"></a>

#### `getGroupRootFilesByFolder`

- **参数**:
    - `group` float 群号
    - `folder_id` string 文件夹id

- **返回**: `object` 

[↩️ 返回类目录](#api-file) | [⬆️ 返回顶部](#start)

<a id="api-file-getgroupfileurl"></a>

#### `getGroupFileUrl`

- **参数**:
    - `group` float 群号
    - `file_id` string 文件id
    - `busid` int 文件类型

- **返回**: `object` 

[↩️ 返回类目录](#api-file) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-friend"></a>

## friend 类

> 完整类名: `Api\friend`

### 📋 可用方法

**方法导航**: [`getStrangerInfo`](#api-friend-getstrangerinfo) | [`getFriendList`](#api-friend-getfriendlist) | [`getUnidirectionalFriendList`](#api-friend-getunidirectionalfriendlist) | [`deleteFriend`](#api-friend-deletefriend) | [`deleteUnidirectionalFriend`](#api-friend-deleteunidirectionalfriend)

<a id="api-friend-getstrangerinfo"></a>

#### `getStrangerInfo`

- **参数**:
    - `qq` float QQ帐号
    - `no_cache` bool 是否无视缓存，无视可能更新不及时

- **返回**: `object` 

[↩️ 返回类目录](#api-friend) | [⬆️ 返回顶部](#start)

<a id="api-friend-getfriendlist"></a>

#### `getFriendList`

- **返回**: `object` 

[↩️ 返回类目录](#api-friend) | [⬆️ 返回顶部](#start)

<a id="api-friend-getunidirectionalfriendlist"></a>

#### `getUnidirectionalFriendList`

- **返回**: `object` 

[↩️ 返回类目录](#api-friend) | [⬆️ 返回顶部](#start)

<a id="api-friend-deletefriend"></a>

#### `deleteFriend`

- **参数**:
    - `qq` float 账号

- **返回**: `void` 

[↩️ 返回类目录](#api-friend) | [⬆️ 返回顶部](#start)

<a id="api-friend-deleteunidirectionalfriend"></a>

#### `deleteUnidirectionalFriend`

- **参数**:
    - `qq` float 账号

- **返回**: `void` 

[↩️ 返回类目录](#api-friend) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-groupinfo"></a>

## groupInfo 类

> 完整类名: `Api\groupInfo`

### 📋 可用方法

**方法导航**: [`getGroupInfo`](#api-groupinfo-getgroupinfo) | [`getGroupList`](#api-groupinfo-getgrouplist) | [`getGroupMemberInfo`](#api-groupinfo-getgroupmemberinfo) | [`getGroupMemberList`](#api-groupinfo-getgroupmemberlist) | [`getGroupHonorInfo`](#api-groupinfo-getgrouphonorinfo) | [`getGroupSystemMsg`](#api-groupinfo-getgroupsystemmsg) | [`getEssenceMsgList`](#api-groupinfo-getessencemsglist) | [`getGroupAtAllRemain`](#api-groupinfo-getgroupatallremain)

<a id="api-groupinfo-getgroupinfo"></a>

#### `getGroupInfo`

- **参数**:
    - `group` float 群号
    - `no_cache` bool 是否不使用缓存，默认是

- **返回**: `object` 

[↩️ 返回类目录](#api-groupinfo) | [⬆️ 返回顶部](#start)

<a id="api-groupinfo-getgrouplist"></a>

#### `getGroupList`

- **参数**:
    - `no_cache` bool 是否不使用缓存，默认是

- **返回**: `object` 

[↩️ 返回类目录](#api-groupinfo) | [⬆️ 返回顶部](#start)

<a id="api-groupinfo-getgroupmemberinfo"></a>

#### `getGroupMemberInfo`

- **参数**:
    - `group` float 群号
    - `qq` float 账号
    - `no_cache` bool 是否不使用缓存，默认是

- **返回**: `object` 

[↩️ 返回类目录](#api-groupinfo) | [⬆️ 返回顶部](#start)

<a id="api-groupinfo-getgroupmemberlist"></a>

#### `getGroupMemberList`

- **参数**:
    - `group` float 群号
    - `no_cache` bool 是否不使用缓存，默认是

- **返回**: `object` 

[↩️ 返回类目录](#api-groupinfo) | [⬆️ 返回顶部](#start)

<a id="api-groupinfo-getgrouphonorinfo"></a>

#### `getGroupHonorInfo`

- **参数**:
    - `group` float 群号
    - `type` string 要获取的群荣誉类型, 可传入 talkative performer legend strong_newbie emotion 以分别获取单个类型的群荣誉数据, 或传入 all 获取所有数据

- **返回**: `object` 

[↩️ 返回类目录](#api-groupinfo) | [⬆️ 返回顶部](#start)

<a id="api-groupinfo-getgroupsystemmsg"></a>

#### `getGroupSystemMsg`

- **返回**: `object` 

[↩️ 返回类目录](#api-groupinfo) | [⬆️ 返回顶部](#start)

<a id="api-groupinfo-getessencemsglist"></a>

#### `getEssenceMsgList`

- **参数**:
    - `group` float 群号

- **返回**: `object` 

[↩️ 返回类目录](#api-groupinfo) | [⬆️ 返回顶部](#start)

<a id="api-groupinfo-getgroupatallremain"></a>

#### `getGroupAtAllRemain`

- **参数**:
    - `group` float 群号

- **返回**: `object` 

[↩️ 返回类目录](#api-groupinfo) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-groupsetup"></a>

## groupSetup 类

> 完整类名: `Api\groupSetup`

### 📋 可用方法

**方法导航**: [`setGroupName`](#api-groupsetup-setgroupname) | [`setGroupPortrait`](#api-groupsetup-setgroupportrait) | [`setGroupAdmin`](#api-groupsetup-setgroupadmin) | [`setGroupCard`](#api-groupsetup-setgroupcard) | [`setGroupSpecialTitle`](#api-groupsetup-setgroupspecialtitle) | [`setGroupBan`](#api-groupsetup-setgroupban) | [`setGroupWholeBan`](#api-groupsetup-setgroupwholeban) | [`setGroupAnonymousBan`](#api-groupsetup-setgroupanonymousban) | [`setEssenceMsg`](#api-groupsetup-setessencemsg) | [`sendGroupSign`](#api-groupsetup-sendgroupsign) | [`setGroupAnonymous`](#api-groupsetup-setgroupanonymous) | [`sendGroupNotice`](#api-groupsetup-sendgroupnotice) | [`getGroupNotice`](#api-groupsetup-getgroupnotice) | [`setGroupKick`](#api-groupsetup-setgroupkick) | [`setGroupLeave`](#api-groupsetup-setgroupleave)

<a id="api-groupsetup-setgroupname"></a>

#### `setGroupName`

- **参数**:
    - `group` float 群号
    - `group_name` string 要设置的群名

- **返回**: `object` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-setgroupportrait"></a>

#### `setGroupPortrait`

- **参数**:
    - `group` float 群号
    - `file` string 图片链接，可以file://，url，base64://
    - `cache` int 是否使用已缓存文件，0否1是

- **返回**: `object` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-setgroupadmin"></a>

#### `setGroupAdmin`

- **参数**:
    - `group` float 群号
    - `qq` float 账号
    - `enable` bool true设置 false取消

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-setgroupcard"></a>

#### `setGroupCard`

- **参数**:
    - `group` float 群号
    - `qq` float 账号
    - `card` ?string 群名片，不填或空为删除群名片

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-setgroupspecialtitle"></a>

#### `setGroupSpecialTitle`

- **参数**:
    - `group` float 群号
    - `qq` float 账号
    - `special_title` ?string 群头衔，不填或空为删除群头衔
    - `duration` int 专属头衔有效期, 单位秒, -1 表示永久, 不过此项似乎没有效果, 可能是只有某些特殊的时间长度有效, 有待测试

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-setgroupban"></a>

#### `setGroupBan`

- **参数**:
    - `group` float 群号
    - `qq` float 账号
    - `duration` float 时长，单位秒 默认1800，0为取消禁言

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-setgroupwholeban"></a>

#### `setGroupWholeBan`

- **参数**:
    - `group` float 群号
    - `enable` bool 是否禁言，默认true

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-setgroupanonymousban"></a>

#### `setGroupAnonymousBan`

- **参数**:
    - `group` float 群号
    - `anonymous` object|array|null 可选, 要禁言的匿名用户对象（群消息上报的 anonymous 字段）
    - `flag` ?string 可选, 要禁言的匿名用户的 flag（需从群消息上报的数据中获得）
    - `duration` float 禁言时长, 单位秒, 无法取消匿名用户禁言

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-setessencemsg"></a>

#### `setEssenceMsg`

- **参数**:
    - `message_id` float 消息id

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-sendgroupsign"></a>

#### `sendGroupSign`

- **参数**:
    - `group` float 群号

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-setgroupanonymous"></a>

#### `setGroupAnonymous`

- **参数**:
    - `group` float 群号
    - `enable` bool 开关 true开false关，默认true

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-sendgroupnotice"></a>

#### `sendGroupNotice`

- **参数**:
    - `group` float 群号
    - `content` string 公告内容
    - `image` ?string 公告图片

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-getgroupnotice"></a>

#### `getGroupNotice`

- **参数**:
    - `group` float 群号

- **返回**: `object` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-setgroupkick"></a>

#### `setGroupKick`

- **参数**:
    - `group` float 群号
    - `qq` float 账号
    - `reject_add_request` bool 是否拒绝此人进群，默认false

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

<a id="api-groupsetup-setgroupleave"></a>

#### `setGroupLeave`

- **参数**:
    - `group` float 群号
    - `is_dismiss` bool 是否解散(只在Bot是群主时候有用)，默认false

- **返回**: `void` 

[↩️ 返回类目录](#api-groupsetup) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-handle"></a>

## handle 类

> 完整类名: `Api\handle`

### 📋 可用方法

**方法导航**: [`setFriendAddRequest`](#api-handle-setfriendaddrequest) | [`setGroupAddRequest`](#api-handle-setgroupaddrequest)

<a id="api-handle-setfriendaddrequest"></a>

#### `setFriendAddRequest`

- **参数**:
    - `flag` string 好友请求的flag，从上报中获取
    - `approve` bool 是否同意，默认同意
    - `remark` ?string 添加好友后的备注，空为不备注

- **返回**: `void` 

[↩️ 返回类目录](#api-handle) | [⬆️ 返回顶部](#start)

<a id="api-handle-setgroupaddrequest"></a>

#### `setGroupAddRequest`

- **参数**:
    - `flag` string|float 入群请求的flag，从上报中获取
    - `type` string 入群请求的type，从上报中的sub_type获取，(add/invite);
    - `approve` bool 是否同意，默认同意
    - `remark` ?string 拒绝理由，只在拒绝的时候有效，可以为空

- **返回**: `void` 

[↩️ 返回类目录](#api-handle) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-image"></a>

## image 类

> 完整类名: `Api\image`

### 📋 可用方法

**方法导航**: [`getImage`](#api-image-getimage) | [`canSendImage`](#api-image-cansendimage) | [`ocrImage`](#api-image-ocrimage)

<a id="api-image-getimage"></a>

#### `getImage`

- **参数**:
    - `file` string 图片缓存文件名

- **返回**: `object` 

[↩️ 返回类目录](#api-image) | [⬆️ 返回顶部](#start)

<a id="api-image-cansendimage"></a>

#### `canSendImage`

- **返回**: `object` 

[↩️ 返回类目录](#api-image) | [⬆️ 返回顶部](#start)

<a id="api-image-ocrimage"></a>

#### `ocrImage`

- **参数**:
    - `image` string 图片id

- **返回**: `object` 

[↩️ 返回类目录](#api-image) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-message"></a>

## message 类

> 完整类名: `Api\message`

### 📋 可用方法

**方法导航**: [`sendPrivateMsg`](#api-message-sendprivatemsg) | [`sendGroupMsg`](#api-message-sendgroupmsg) | [`sendMsg`](#api-message-sendmsg) | [`sendMarkdownMsg`](#api-message-sendmarkdownmsg) | [`sendGreyTip`](#api-message-sendgreytip) | [`sendKeyboardMsg`](#api-message-sendkeyboardmsg) | [`getMsg`](#api-message-getmsg) | [`deleteMsg`](#api-message-deletemsg) | [`markMsgAsRead`](#api-message-markmsgasread) | [`getForwardMsg`](#api-message-getforwardmsg) | [`sendForwardMsg`](#api-message-sendforwardmsg) | [`sendGroupForwardMsg`](#api-message-sendgroupforwardmsg) | [`sendPrivateForwardMsg`](#api-message-sendprivateforwardmsg) | [`getGroupMsgHistory`](#api-message-getgroupmsghistory) | [`escape`](#api-message-escape) | [`structureImage`](#api-message-structureimage) | [`structureVideo`](#api-message-structurevideo) | [`structureRecord`](#api-message-structurerecord) | [`structureFace`](#api-message-structureface) | [`structureMagic`](#api-message-structuremagic) | [`structureGift`](#api-message-structuregift) | [`structurePoke`](#api-message-structurepoke) | [`structureShare`](#api-message-structureshare) | [`structureContact`](#api-message-structurecontact) | [`structureLocation`](#api-message-structurelocation) | [`structureMusic`](#api-message-structuremusic) | [`structureReply`](#api-message-structurereply) | [`structureNode`](#api-message-structurenode) | [`structureCard`](#api-message-structurecard) | [`structureTts`](#api-message-structuretts) | [`structureText`](#api-message-structuretext) | [`structureTextPro`](#api-message-structuretextpro) | [`structureAt`](#api-message-structureat) | [`structureJson`](#api-message-structurejson) | [`structureMarkdown`](#api-message-structuremarkdown) | [`structureLongMsg`](#api-message-structurelongmsg) | [`structureKeyboard`](#api-message-structurekeyboard) | [`structureGreyTip`](#api-message-structuregreytip)

<a id="api-message-sendprivatemsg"></a>

#### `sendPrivateMsg`

- **参数**:
    - `qq` float 账号
    - `group` float 群号
    - `message` string|array 消息内容
    - `auto_escape` bool 发送内容是否是纯文本(不解析CQ码)

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-sendgroupmsg"></a>

#### `sendGroupMsg`

- **参数**:
    - `group` float 群号
    - `message` string|array 消息内容
    - `auto_escape` bool 发送内容是否是纯文本(不解析CQ码)

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-sendmsg"></a>

#### `sendMsg`

- **参数**:
    - `message_type` string 类型(group/private)
    - `qq` float 账号
    - `group` float 群号
    - `message` string|array 消息内容
    - `auto_escape` bool 发送内容是否是纯文本(不解析CQ码)

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-sendmarkdownmsg"></a>

#### `sendMarkdownMsg`

- **参数**:
    - `group` float 群号
    - `message` string|array 消息内容
    - `rows` array 按钮组
    - `callback` bool 是否回调
    - `auto_escape` bool 发送内容是否是纯文本(不解析CQ码)

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-sendgreytip"></a>

#### `sendGreyTip`

- **参数**:
    - `group` float 群号
    - `content` string tip内容
    - `message` string 消息内容，必须携带消息发送

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-sendkeyboardmsg"></a>

#### `sendKeyboardMsg`

- **参数**:
    - `group` float 群号
    - `message` string|array 消息内容
    - `auto_escape` bool 发送内容是否是纯文本(不解析CQ码)

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-getmsg"></a>

#### `getMsg`

- **参数**:
    - `message_id` int 消息id

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-deletemsg"></a>

#### `deleteMsg`

- **参数**:
    - `message_id` int 消息id

- **返回**: `void` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-markmsgasread"></a>

#### `markMsgAsRead`

- **参数**:
    - `message_id` int 消息id

- **返回**: `void` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-getforwardmsg"></a>

#### `getForwardMsg`

- **参数**:
    - `message_id` int 消息id

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-sendforwardmsg"></a>

#### `sendForwardMsg`

- **参数**:
    - `message` object|array 消息内容

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-sendgroupforwardmsg"></a>

#### `sendGroupForwardMsg`

- **参数**:
    - `group` float 群号
    - `message` object|array 消息内容

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-sendprivateforwardmsg"></a>

#### `sendPrivateForwardMsg`

- **参数**:
    - `qq` float 账号
    - `message` object|array 消息内容

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-getgroupmsghistory"></a>

#### `getGroupMsgHistory`

- **参数**:
    - `message_seq` float 起始消息序号，可以通过getMsg获取
    - `group` float 群号

- **返回**: `object` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-escape"></a>

#### `escape`

- **参数**:
    - `str` string 
    - `escape` bool 正反 默认正

- **返回**: `?string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structureimage"></a>

#### `structureImage`

- **参数**:
    - `file` ?string 文件路径/Url
    - `type` ?string 图片类型, flash 表示闪照, show 表示秀图, 默认普通图片
    - `subType` ?int 图片子类型, 只出现在群聊. 0	正常图片，1	表情包, 在客户端会被分类到表情包图片并缩放显示，2	热图，3	斗图，4	智图?，7	贴图，8	自拍，9	贴图广告?，10	有待测试，13	热搜图, 14	ai表情。默认1，后改成14了
    - `url` ?string 图片链接，与file相比，file优先
    - `cache` int 只在通过网络 URL 发送时有效, 表示是否使用已缓存的文件, 默认 1
    - `width` int 图片显示宽度 默认 0 既自适应
    - `height` int 图片显示高度 默认 0 既自适应
    - `id` int 发送秀图时的特效id, 默认为40000，有效id：40000-40005
    - `c` int 通过网络下载图片时的线程数, 默认单线程. (在资源不支持并发时会自动处理)
    - `escape` bool 是否用cq码输出，默认不是

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structurevideo"></a>

#### `structureVideo`

- **参数**:
    - `file` ?string 文件路径/Url
    - `cover` ?string 视频封面, 支持http, file和base64发送, 格式必须为jpg
    - `c` int 通过网络下载图片时的线程数, 默认单线程. (在资源不支持并发时会自动处理)
    - `escape` bool 是否用cq码输出，默认不是

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structurerecord"></a>

#### `structureRecord`

- **参数**:
    - `file` ?string 文件路径/Url
    - `magic` int 语音类型，0默认1变声;
    - `cache` int 是否使用缓存，默认1使用，0不使用
    - `proxy` int 只在通过网络 URL 发送时有效, 表示是否通过代理下载文件 ( 需通过环境变量或配置文件配置代理 ) , 默认 1
    - `timeout` int 只在通过网络 URL 发送时有效, 单位秒, 表示下载网络文件的超时时间 , 默认不超时
    - `escape` bool 是否用cq码输出，默认不是

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structureface"></a>

#### `structureFace`

- **参数**:
    - `id` int 表情id
    - `escape` bool 是否用cq码输出，默认不是

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structuremagic"></a>

#### `structureMagic`

- **参数**:
    - `id` int 表情id
    - `type` string 魔法表情类型，rps猜拳，dice骰子，shake串口抖动，默认猜拳
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structuregift"></a>

#### `structureGift`

- **参数**:
    - `qq` float 账号
    - `id` int 0	甜 Wink，1	快乐肥宅水，2	幸运手链，3	卡布奇诺，4	猫咪手表，5	绒绒手套，6	彩虹糖果，7	坚强，8	告白话筒，9	牵你的手，10	可爱猫咪，11	神秘面具，12	我超忙的，13	爱心口罩
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structurepoke"></a>

#### `structurePoke`

- **参数**:
    - `qq` float 账号
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structureshare"></a>

#### `structureShare`

- **参数**:
    - `url` string 链接
    - `title` string 标题
    - `content` string 简介
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structurecontact"></a>

#### `structureContact`

- **参数**:
    - `type` string qq为好友，group为群
    - `id` float 标题
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structurelocation"></a>

#### `structureLocation`

- **参数**:
    - `lat` float 经度
    - `lon` float 纬度
    - `title` ?string 发送时可选, 标题
    - `content` ?string 发送时可选, 内容描述
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structuremusic"></a>

#### `structureMusic`

- **参数**:
    - `type` string|int qq 163 xm	分别表示使用 QQ 音乐、网易云音乐、虾米音乐，custom	表示音乐自定义分享
    - `id` string|int 歌曲id
    - `url` ?string 自定义时点击跳转链接
    - `audio` ?string 音乐链接
    - `title` ?string 标题
    - `content` ?string 发送时可选, 内容描述
    - `image` ?string 图片链接
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structurereply"></a>

#### `structureReply`

- **参数**:
    - `id` ?int 引用的消息id，如果有自定义，自定义优先
    - `text` ?string 自定义消息内容
    - `qq` ?float 自定义回复时的自定义QQ, 如果使用自定义信息必须指定.
    - `time` ?float 时间戳
    - `seq` ?float 起始消息序号, 可通过 get_msg 获得
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structurenode"></a>

#### `structureNode`

- **参数**:
    - `id` ?string 直接引用他人的消息合并转发, 实际查看顺序为原消息发送顺序 与下面的自定义消息二选一
    - `name` ?string 用于自定义消息 (自定义消息并合并转发, 实际查看顺序为自定义消息段顺序)
    - `uin` ?float 用于自定义消息中的账号
    - `content` string|array|null 用于自定义消息 不支持转发，message消息组或者cq码
    - `seq` ?float 起始消息序号, 可通过 get_msg 获得 用于自定义消息
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structurecard"></a>

#### `structureCard`

- **参数**:
    - `data` string 卡片内容
    - `resid` ?int 可能为空, 或空字符串
    - `type` string 类型，xml，json
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structuretts"></a>

#### `structureTts`

- **参数**:
    - `text` string 消息内容
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structuretext"></a>

#### `structureText`

- **参数**:
    - `text` string 消息内容
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structuretextpro"></a>

#### `structureTextPro`

- **参数**:
    - `text` string 消息内容
    - `escape` bool 是否用cq码输出，默认不是，魔法表情无法使用cq码

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structureat"></a>

#### `structureAt`

- **参数**:
    - `qq` float 账号
    - `name` string 当在群中找不到此QQ号的名称时才会生效
    - `escape` bool 是否用cq码输出，默认不是。

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structurejson"></a>

#### `structureJson`

- **参数**:
    - `data` string json内容, json的所有字符串记得实体化处理
    - `escape` bool 是否用cq码输出，默认不是。

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structuremarkdown"></a>

#### `structureMarkdown`

- **参数**:
    - `data` string json内容, json的所有字符串记得实体化处理
    - `escape` bool 是否用cq码输出，默认不是。

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structurelongmsg"></a>

#### `structureLongMsg`

- **参数**:
    - `id` string|float 消息id
    - `escape` bool 是否用cq码输出，默认不是。

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structurekeyboard"></a>

#### `structureKeyboard`

- **参数**:
    - `rows` array rows内容，参考 https://bot.q.qq.com/wiki/develop/api-v2/server-inter/message/trans/msg-btn.html
    - `escape` bool 是否用cq码输出，默认不是。

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

<a id="api-message-structuregreytip"></a>

#### `structureGreyTip`

- **参数**:
    - `content` string 内容
    - `escape` bool 是否用cq码输出，默认不是。

- **返回**: `array|string` 

[↩️ 返回类目录](#api-message) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-record"></a>

## record 类

> 完整类名: `Api\record`

### 📋 可用方法

**方法导航**: [`getRecord`](#api-record-getrecord) | [`canSendRecord`](#api-record-cansendrecord)

<a id="api-record-getrecord"></a>

#### `getRecord`

- **参数**:
    - `file` string 文件名
    - `out_format` string 要转换到的格式, 目前支持 mp3、amr、wma、m4a、spx、ogg、wav、flac

- **返回**: `object` 

[↩️ 返回类目录](#api-record) | [⬆️ 返回顶部](#start)

<a id="api-record-cansendrecord"></a>

#### `canSendRecord`

- **返回**: `object` 

[↩️ 返回类目录](#api-record) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="api-uin"></a>

## uin 类

> 完整类名: `Api\uin`

### 📋 可用方法

**方法导航**: [`__construct`](#api-uin-__construct) | [`get`](#api-uin-get) | [`set`](#api-uin-set) | [`data`](#api-uin-data)

<a id="api-uin-__construct"></a>

#### `__construct`

[↩️ 返回类目录](#api-uin) | [⬆️ 返回顶部](#start)

<a id="api-uin-get"></a>

#### `get`

[↩️ 返回类目录](#api-uin) | [⬆️ 返回顶部](#start)

<a id="api-uin-set"></a>

#### `set`

[↩️ 返回类目录](#api-uin) | [⬆️ 返回顶部](#start)

<a id="api-uin-data"></a>

#### `data`

[↩️ 返回类目录](#api-uin) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-cache"></a>

## Cache 类

> 完整类名: `Utils\Cache`

> 缓存工具类：区分静态核心属性与动态缓存，支持过期、过滤、并发安全

### 📋 可用方法

**方法导航**: [`get`](#utils-cache-get) | [`set`](#utils-cache-set) | [`del`](#utils-cache-del) | [`getBatch`](#utils-cache-getbatch) | [`setBatch`](#utils-cache-setbatch) | [`__callStatic`](#utils-cache-__callstatic)

<a id="utils-cache-get"></a>

#### `get` `(static)`

获取缓存/静态属性值

- **参数**:
    - `name` string 缓存名/静态属性名（前缀"?"表示仅判断是否存在）
    - `default` mixed 默认值（缓存不存在时返回）
    - `filter` string|array 过滤函数（多个用逗号分隔或传数组）

- **返回**: `mixed` 结果（判断存在时返回bool，否则返回处理后的值）

[↩️ 返回类目录](#utils-cache) | [⬆️ 返回顶部](#start)

<a id="utils-cache-set"></a>

#### `set` `(static)`

设置缓存/静态属性值

- **参数**:
    - `name` string 缓存名/静态属性名
    - `value` mixed 值
    - `expire` int 动态缓存过期时间（秒，0=永久，仅对动态缓存有效）

[↩️ 返回类目录](#utils-cache) | [⬆️ 返回顶部](#start)

<a id="utils-cache-del"></a>

#### `del` `(static)`

删除缓存/重置静态属性

[↩️ 返回类目录](#utils-cache) | [⬆️ 返回顶部](#start)

<a id="utils-cache-getbatch"></a>

#### `getBatch` `(static)`

批量获取动态缓存

- **参数**:
    - `names` array 缓存名列表
    - `default` mixed 默认值

- **返回**: `array` 键值对结果

[↩️ 返回类目录](#utils-cache) | [⬆️ 返回顶部](#start)

<a id="utils-cache-setbatch"></a>

#### `setBatch` `(static)`

批量设置动态缓存

- **参数**:
    - `data` array 键值对数组（key=缓存名，value=值）
    - `expire` int 过期时间（秒，0=永久）

[↩️ 返回类目录](#utils-cache) | [⬆️ 返回顶部](#start)

<a id="utils-cache-__callstatic"></a>

#### `__callStatic` `(static)`

魔术方法：禁止静态调用动态缓存（避免语义混淆）

- **参数**:
    - `method` string 方法名
    - `args` array 参数

[↩️ 返回类目录](#utils-cache) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-commandparser"></a>

## CommandParser 类

> 完整类名: `Utils\CommandParser`

### 📋 可用方法

**方法导航**: [`getInstance`](#utils-commandparser-getinstance) | [`command`](#utils-commandparser-command) | [`option`](#utils-commandparser-option) | [`getHelp`](#utils-commandparser-gethelp) | [`parse`](#utils-commandparser-parse)

<a id="utils-commandparser-getinstance"></a>

#### `getInstance` `(static)`

[↩️ 返回类目录](#utils-commandparser) | [⬆️ 返回顶部](#start)

<a id="utils-commandparser-command"></a>

#### `command`

新增：注册命令描述（用于生成帮助）

- **参数**:
    - `desc` string 命令功能描述

- **返回**: `$this` 

[↩️ 返回类目录](#utils-commandparser) | [⬆️ 返回顶部](#start)

<a id="utils-commandparser-option"></a>

#### `option`

新增：注册参数规则（核心方法，类似yargs.option）

- **参数**:
    - `name` string 参数名（短选项用单字符，长选项用多字符，如 'n' 或 'name'）
    - `rule` array 规则配置，支持：

- **返回**: `$this` 

[↩️ 返回类目录](#utils-commandparser) | [⬆️ 返回顶部](#start)

<a id="utils-commandparser-gethelp"></a>

#### `getHelp`

新增：生成帮助信息（类似yargs --help）

- **返回**: `string` 

[↩️ 返回类目录](#utils-commandparser) | [⬆️ 返回顶部](#start)

<a id="utils-commandparser-parse"></a>

#### `parse`

原解析方法：新增「规则校验」和「默认值填充」

[↩️ 返回类目录](#utils-commandparser) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-coroutinecurl"></a>

## CoroutineCurl 类

> 完整类名: `Utils\CoroutineCurl`

### 📋 可用方法

**方法导航**: [`__construct`](#utils-coroutinecurl-__construct) | [`init`](#utils-coroutinecurl-init) | [`location`](#utils-coroutinecurl-location) | [`addHeaders`](#utils-coroutinecurl-addheaders) | [`setHeaders`](#utils-coroutinecurl-setheaders) | [`get`](#utils-coroutinecurl-get) | [`post`](#utils-coroutinecurl-post) | [`request`](#utils-coroutinecurl-request) | [`accept`](#utils-coroutinecurl-accept) | [`timeout`](#utils-coroutinecurl-timeout) | [`encode`](#utils-coroutinecurl-encode) | [`proxy`](#utils-coroutinecurl-proxy) | [`json`](#utils-coroutinecurl-json) | [`object`](#utils-coroutinecurl-object) | [`string`](#utils-coroutinecurl-string) | [`__toString`](#utils-coroutinecurl-__tostring)

<a id="utils-coroutinecurl-__construct"></a>

#### `__construct`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-init"></a>

#### `init` `(static)`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-location"></a>

#### `location`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-addheaders"></a>

#### `addHeaders`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-setheaders"></a>

#### `setHeaders`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-get"></a>

#### `get`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-post"></a>

#### `post`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-request"></a>

#### `request`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-accept"></a>

#### `accept`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-timeout"></a>

#### `timeout`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-encode"></a>

#### `encode`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-proxy"></a>

#### `proxy`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-json"></a>

#### `json`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-object"></a>

#### `object`

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-string"></a>

#### `string`

- **返回**: `string` 

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

<a id="utils-coroutinecurl-__tostring"></a>

#### `__toString`

- **返回**: `string` 

[↩️ 返回类目录](#utils-coroutinecurl) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-env"></a>

## Env 类

> 完整类名: `Utils\Env`

> 配置工具类：支持INI文件解析、内存缓存、多维配置读取，仅首次读取文件

### 📋 可用方法

**方法导航**: [`get`](#utils-env-get) | [`refreshCache`](#utils-env-refreshcache) | [`getAll`](#utils-env-getall) | [`Config`](#utils-env-config)

<a id="utils-env-get"></a>

#### `get` `(static)`

获取配置值（优先读内存缓存，未初始化则读取文件并缓存）

- **参数**:
    - `key` string 配置键（支持多维，如"Redis.host"）
    - `default` mixed 默认值（配置不存在时返回）

- **返回**: `mixed` 配置值

[↩️ 返回类目录](#utils-env) | [⬆️ 返回顶部](#start)

<a id="utils-env-refreshcache"></a>

#### `refreshCache` `(static)`

手动刷新配置缓存（强制重新读取文件，用于动态更新配置）

- **返回**: `bool` 刷新结果

[↩️ 返回类目录](#utils-env) | [⬆️ 返回顶部](#start)

<a id="utils-env-getall"></a>

#### `getAll` `(static)`

获取全部配置（仅调试/特殊场景使用，避免暴露敏感配置）

- **返回**: `array` 全部配置数组

[↩️ 返回类目录](#utils-env) | [⬆️ 返回顶部](#start)

<a id="utils-env-config"></a>

#### `Config` `(static)`

兼容原Config方法（保持向下兼容）

- **参数**:
    - `key` string 配置键
    - `default` mixed 默认值

- **返回**: `mixed` 配置值

[↩️ 返回类目录](#utils-env) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-git"></a>

## Git 类

> 完整类名: `Utils\Git`

> Git 工具类：完整功能实现 特性：单列模式 + Env 配置 + 自动提取仓库名 + 核心 Git 操作 依赖：服务器安装 Git、PHP 开启 shell_exec()、项目支持 Env 类（如 ThinkPHP）

### 📋 可用方法

**方法导航**: [`getInstance`](#utils-git-getinstance) | [`setBasePath`](#utils-git-setbasepath) | [`getBasePath`](#utils-git-getbasepath) | [`clone`](#utils-git-clone) | [`pull`](#utils-git-pull) | [`branch`](#utils-git-branch) | [`commit`](#utils-git-commit) | [`getCommits`](#utils-git-getcommits) | [`getCurrentBranch`](#utils-git-getcurrentbranch) | [`delete`](#utils-git-delete)

<a id="utils-git-getinstance"></a>

#### `getInstance` `(static)`

获取全局唯一实例

- **参数**:
    - `basePath` string 手动指定主路径（可选，优先级高于 Env）

- **返回**: `self` 

[↩️ 返回类目录](#utils-git) | [⬆️ 返回顶部](#start)

<a id="utils-git-setbasepath"></a>

#### `setBasePath`

设置/更新仓库根目录

- **参数**:
    - `basePath` string 主路径（空则从 Env 重新读取）

- **返回**: `array` ['success' => bool, 'msg' => string]

[↩️ 返回类目录](#utils-git) | [⬆️ 返回顶部](#start)

<a id="utils-git-getbasepath"></a>

#### `getBasePath`

获取当前主路径

- **返回**: `string|null` 主路径（未配置则返回 null）

[↩️ 返回类目录](#utils-git) | [⬆️ 返回顶部](#start)

<a id="utils-git-clone"></a>

#### `clone`

克隆仓库（优先自动提取仓库名，手动传参覆盖）

- **参数**:
    - `repoUrl` string 仓库 URL（HTTP/SSH）
    - `repoName` string 手动指定仓库名（可选）
    - `options` array 配置：

- **返回**: `array` ['success' => bool, 'msg' => string, 'data' => array]

[↩️ 返回类目录](#utils-git) | [⬆️ 返回顶部](#start)

<a id="utils-git-pull"></a>

#### `pull`

拉取远程仓库更新

- **参数**:
    - `repoName` string 仓库名（克隆时返回的 repoName）
    - `options` array 配置：

- **返回**: `array` ['success' => bool, 'msg' => string]

[↩️ 返回类目录](#utils-git) | [⬆️ 返回顶部](#start)

<a id="utils-git-branch"></a>

#### `branch`

分支管理（创建/切换/删除/列出）

- **参数**:
    - `repoName` string 仓库名
    - `action` string 操作类型：create/switch/delete/list
    - `branchName` string 分支名（list 时可空）

- **返回**: `array` ['success' => bool, 'msg' => string, 'data' => array|null]

[↩️ 返回类目录](#utils-git) | [⬆️ 返回顶部](#start)

<a id="utils-git-commit"></a>

#### `commit`

代码提交（暂存+提交）

- **参数**:
    - `repoName` string 仓库名
    - `commitMsg` string 提交信息（必填）
    - `files` array 待提交文件列表（空则提交所有，支持绝对路径/仓库内相对路径）

- **返回**: `array` ['success' => bool, 'msg' => string, 'data' => string|null]

[↩️ 返回类目录](#utils-git) | [⬆️ 返回顶部](#start)

<a id="utils-git-getcommits"></a>

#### `getCommits`

获取提交记录

- **参数**:
    - `repoName` string 仓库名
    - `options` array 配置：

- **返回**: `array` ['success' => bool, 'msg' => string, 'data' => array|null]

[↩️ 返回类目录](#utils-git) | [⬆️ 返回顶部](#start)

<a id="utils-git-getcurrentbranch"></a>

#### `getCurrentBranch`

获取当前分支名

- **参数**:
    - `repoName` string 仓库名

- **返回**: `array` ['success' => bool, 'msg' => string, 'data' => string|null]

[↩️ 返回类目录](#utils-git) | [⬆️ 返回顶部](#start)

<a id="utils-git-delete"></a>

#### `delete`

删除本地仓库（含安全校验，防止误删非仓库目录）

- **参数**:
    - `repoName` string 仓库名（克隆时返回的 repoName，需在主路径下）
    - `force` bool 强制删除（即使目录非空/权限不足，默认 false）

- **返回**: `array` ['success' => bool, 'msg' => string]

[↩️ 返回类目录](#utils-git) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-logger"></a>

## Logger 类

> 完整类名: `Utils\Logger`

### 📋 可用方法

**方法导航**: [`init`](#utils-logger-init) | [`configure`](#utils-logger-configure) | [`message`](#utils-logger-message) | [`success`](#utils-logger-success) | [`error`](#utils-logger-error) | [`info`](#utils-logger-info) | [`warning`](#utils-logger-warning) | [`debug`](#utils-logger-debug) | [`tput`](#utils-logger-tput) | [`enableConsole`](#utils-logger-enableconsole) | [`enableFile`](#utils-logger-enablefile)

<a id="utils-logger-init"></a>

#### `init` `(static)`

[↩️ 返回类目录](#utils-logger) | [⬆️ 返回顶部](#start)

<a id="utils-logger-configure"></a>

#### `configure` `(static)`

初始化配置

[↩️ 返回类目录](#utils-logger) | [⬆️ 返回顶部](#start)

<a id="utils-logger-message"></a>

#### `message` `(static)`

静态日志方法

[↩️ 返回类目录](#utils-logger) | [⬆️ 返回顶部](#start)

<a id="utils-logger-success"></a>

#### `success` `(static)`

[↩️ 返回类目录](#utils-logger) | [⬆️ 返回顶部](#start)

<a id="utils-logger-error"></a>

#### `error` `(static)`

[↩️ 返回类目录](#utils-logger) | [⬆️ 返回顶部](#start)

<a id="utils-logger-info"></a>

#### `info` `(static)`

[↩️ 返回类目录](#utils-logger) | [⬆️ 返回顶部](#start)

<a id="utils-logger-warning"></a>

#### `warning` `(static)`

[↩️ 返回类目录](#utils-logger) | [⬆️ 返回顶部](#start)

<a id="utils-logger-debug"></a>

#### `debug` `(static)`

[↩️ 返回类目录](#utils-logger) | [⬆️ 返回顶部](#start)

<a id="utils-logger-tput"></a>

#### `tput` `(static)`

[↩️ 返回类目录](#utils-logger) | [⬆️ 返回顶部](#start)

<a id="utils-logger-enableconsole"></a>

#### `enableConsole` `(static)`

开关控制

[↩️ 返回类目录](#utils-logger) | [⬆️ 返回顶部](#start)

<a id="utils-logger-enablefile"></a>

#### `enableFile` `(static)`

[↩️ 返回类目录](#utils-logger) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-markdown"></a>

## Markdown 类

> 完整类名: `Utils\Markdown`

### 📋 可用方法

**方法导航**: [`__construct`](#utils-markdown-__construct) | [`render`](#utils-markdown-render) | [`action`](#utils-markdown-action) | [`id`](#utils-markdown-id) | [`permission`](#utils-markdown-permission) | [`next`](#utils-markdown-next) | [`prev`](#utils-markdown-prev) | [`current`](#utils-markdown-current) | [`buttons`](#utils-markdown-buttons) | [`url`](#utils-markdown-url) | [`Image`](#utils-markdown-image) | [`markdown`](#utils-markdown-markdown) | [`at`](#utils-markdown-at) | [`Face`](#utils-markdown-face) | [`add`](#utils-markdown-add) | [`cleanMarkdown`](#utils-markdown-cleanmarkdown) | [`cleanButton`](#utils-markdown-cleanbutton) | [`clean`](#utils-markdown-clean) | [`get`](#utils-markdown-get) | [`send`](#utils-markdown-send) | [`bind`](#utils-markdown-bind) | [`escape`](#utils-markdown-escape)

<a id="utils-markdown-__construct"></a>

#### `__construct`

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-render"></a>

#### `render`

- **参数**:
    - `label` string 按钮显示文本
    - `visited` string 按钮按下后显示文本，默认同$label
    - `style` int 主题颜色 0灰色 1蓝色 默认0

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-action"></a>

#### `action`

- **参数**:
    - `type` int 按钮类型 设置 0 跳转按钮：http 或 小程序 客户端识别 scheme，设置 1 回调按钮：回调后台接口, data 传给后台，设置 2 指令按钮：自动在输入框插入 @bot data
    - `data` string 操作相关的数据
    - `reply` bool 按钮按下后是否使用回复消息，默认否
    - `enter` bool 按钮按下后是否发送，默认否
    - `tips` string 客户端不支持本action的时候，弹出的toast文案

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-id"></a>

#### `id`

- **参数**:
    - `id` ?string 按钮id，默认为uniqid()

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-permission"></a>

#### `permission`

- **参数**:
    - `type` int 0 指定用户可操作，1 仅管理者可操作，2 所有人可操作，3 指定身份组可操作（仅频道可用）
    - `user` float|array 有权限的用户 id 的列表

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-next"></a>

#### `next`

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-prev"></a>

#### `prev`

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-current"></a>

#### `current`

- **返回**: `array` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-buttons"></a>

#### `buttons`

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-url"></a>

#### `url`

- **参数**:
    - `title` ?string 链接名
    - `url` string 链接

- **返回**: `bool` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-image"></a>

#### `Image`

- **参数**:
    - `title` ?string 链接名
    - `url` string 链接

- **返回**: `bool` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-markdown"></a>

#### `markdown`

- **参数**:
    - `markdown` string markdown语法的str

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-at"></a>

#### `at`

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-face"></a>

#### `Face`

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-add"></a>

#### `add`

- **参数**:
    - `markdown` string markdown语法的str

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-cleanmarkdown"></a>

#### `cleanMarkdown`

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-cleanbutton"></a>

#### `cleanButton`

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-clean"></a>

#### `clean`

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-get"></a>

#### `get`

- **参数**:
    - `key` string 

- **返回**: `mixed` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-send"></a>

#### `send`

- **参数**:
    - `callback` bool 是否回调，默认否

- **返回**: `array|Object` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-bind"></a>

#### `bind`

- **参数**:
    - `qq` float|string 

- **返回**: `void` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

<a id="utils-markdown-escape"></a>

#### `escape`

- **参数**:
    - `str` string 
    - `escape` bool 正反 默认正

- **返回**: `?string` 

[↩️ 返回类目录](#utils-markdown) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-operate"></a>

## Operate 类

> 完整类名: `Utils\Operate`

### 📋 可用方法

**方法导航**: [`get`](#utils-operate-get) | [`set`](#utils-operate-set) | [`dir`](#utils-operate-dir) | [`read_all`](#utils-operate-read_all) | [`readAll`](#utils-operate-readall) | [`read_all_dir`](#utils-operate-read_all_dir) | [`read_all_dir_list`](#utils-operate-read_all_dir_list) | [`readAllDir`](#utils-operate-readalldir) | [`readFile`](#utils-operate-readfile) | [`unzip`](#utils-operate-unzip) | [`xCopy`](#utils-operate-xcopy) | [`delDir`](#utils-operate-deldir) | [`del_dir`](#utils-operate-del_dir) | [`delfile`](#utils-operate-delfile) | [`del_file`](#utils-operate-del_file)

<a id="utils-operate-get"></a>

#### `get` `(static)`

获取文件内容

- **参数**:
    - `file` String 文件绝对路径
    - `isJson` Bool 如果是读取JSON文件写true，可自动格式化为JSONObject

- **返回**: `Bool|String|JSONObject|Array` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-set"></a>

#### `set` `(static)`

写入文件

- **参数**:
    - `file` String 文件绝对路径
    - `write` String 写入内容

- **返回**: `Bool|int` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-dir"></a>

#### `dir` `(static)`

检测文件夹是否存在 不存在就创建

- **参数**:
    - `dir` String 文件夹绝对路径

- **返回**: `Bool` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-read_all"></a>

#### `read_all` `(static)`

读取文件夹内某些文件

- **参数**:
    - `dir` String 文件夹绝对路径

- **返回**: `Array` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-readall"></a>

#### `readAll` `(static)`

读取文件夹内某些文件

- **参数**:
    - `dir` String 文件夹绝对路径

- **返回**: `Array` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-read_all_dir"></a>

#### `read_all_dir` `(static)`

获取文件夹内所有子文件

- **参数**:
    - `dir` String 文件夹绝对路径

- **返回**: `Array` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-read_all_dir_list"></a>

#### `read_all_dir_list` `(static)`

获取文件夹内所有子文件

- **参数**:
    - `dir` String 文件夹绝对路径

- **返回**: `Array` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-readalldir"></a>

#### `readAllDir` `(static)`

获取文件夹内所有子文件

- **参数**:
    - `dir` String 文件夹绝对路径

- **返回**: `Array` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-readfile"></a>

#### `readFile` `(static)`

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-unzip"></a>

#### `unzip` `(static)`

解压缩

- **参数**:
    - `zipName` string 压缩包名称   绝对路径
    - `dest` string 解压到指定目录   绝对路径

- **返回**: `boolean` true|false

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-xcopy"></a>

#### `xCopy` `(static)`

copy 文件夹

- **参数**:
    - `child` int 类型 1包括子目录 0不包括子目录

- **返回**: `Bool` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-deldir"></a>

#### `delDir` `(static)`

删除目录

- **参数**:
    - `path` string 

- **返回**: `bool` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-del_dir"></a>

#### `del_dir` `(static)`

删除目录

- **参数**:
    - `path` string 

- **返回**: `bool` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-delfile"></a>

#### `delfile` `(static)`

删除过期文件

- **返回**: `Bool` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

<a id="utils-operate-del_file"></a>

#### `del_file` `(static)`

删除过期文件

- **返回**: `Bool` 

[↩️ 返回类目录](#utils-operate) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-pluginmanager"></a>

## PluginManager 类

> 完整类名: `Utils\PluginManager`

### 📋 可用方法

**方法导航**: [`__construct`](#utils-pluginmanager-__construct) | [`readPluginConfig`](#utils-pluginmanager-readpluginconfig) | [`installPluginDeps`](#utils-pluginmanager-installplugindeps) | [`loadPluginAutoload`](#utils-pluginmanager-loadpluginautoload)

<a id="utils-pluginmanager-__construct"></a>

#### `__construct`

[↩️ 返回类目录](#utils-pluginmanager) | [⬆️ 返回顶部](#start)

<a id="utils-pluginmanager-readpluginconfig"></a>

#### `readPluginConfig`

[↩️ 返回类目录](#utils-pluginmanager) | [⬆️ 返回顶部](#start)

<a id="utils-pluginmanager-installplugindeps"></a>

#### `installPluginDeps`

安装插件依赖并生成autoload（优化版：避免重复生成）

[↩️ 返回类目录](#utils-pluginmanager) | [⬆️ 返回顶部](#start)

<a id="utils-pluginmanager-loadpluginautoload"></a>

#### `loadPluginAutoload`

加载插件自动加载（优化版：避免重复加载和注册）

[↩️ 返回类目录](#utils-pluginmanager) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-route"></a>

## Route 类

> 完整类名: `Utils\Route`

> 完善版路由类：支持注解注册、动态路由、ANY方法、精确/模糊匹配

### 📋 可用方法

**方法导航**: [`get`](#utils-route-get) | [`post`](#utils-route-post) | [`put`](#utils-route-put) | [`delete`](#utils-route-delete) | [`any`](#utils-route-any) | [`match`](#utils-route-match) | [`registerByAnnotation`](#utils-route-registerbyannotation) | [`clear`](#utils-route-clear) | [`getRoutes`](#utils-route-getroutes) | [`hasRoute`](#utils-route-hasroute)

<a id="utils-route-get"></a>

#### `get` `(static)`

注册GET路由

- **参数**:
    - `path` string 路由路径（如 '/api/data'、'/user/:id'）
    - `callback` callable 回调函数（闭包/[$class, $method]/函数名）

[↩️ 返回类目录](#utils-route) | [⬆️ 返回顶部](#start)

<a id="utils-route-post"></a>

#### `post` `(static)`

注册POST路由

- **参数**:
    - `path` string 路由路径
    - `callback` callable 回调函数

[↩️ 返回类目录](#utils-route) | [⬆️ 返回顶部](#start)

<a id="utils-route-put"></a>

#### `put` `(static)`

注册PUT路由

- **参数**:
    - `path` string 路由路径
    - `callback` callable 回调函数

[↩️ 返回类目录](#utils-route) | [⬆️ 返回顶部](#start)

<a id="utils-route-delete"></a>

#### `delete` `(static)`

注册DELETE路由

- **参数**:
    - `path` string 路由路径
    - `callback` callable 回调函数

[↩️ 返回类目录](#utils-route) | [⬆️ 返回顶部](#start)

<a id="utils-route-any"></a>

#### `any` `(static)`

注册ANY路由（兼容所有HTTP方法）

- **参数**:
    - `path` string 路由路径
    - `callback` callable 回调函数

[↩️ 返回类目录](#utils-route) | [⬆️ 返回顶部](#start)

<a id="utils-route-match"></a>

#### `match` `(static)`

路由匹配（支持精确匹配+动态路由匹配，返回回调+路由参数）

- **参数**:
    - `method` string 请求方法（GET/POST等）
    - `path` string 请求路径（如 '/api/user/123'）

- **返回**: `array|null` [回调函数, 路由参数数组]，未匹配返回null

[↩️ 返回类目录](#utils-route) | [⬆️ 返回顶部](#start)

<a id="utils-route-registerbyannotation"></a>

#### `registerByAnnotation` `(static)`

通过注解自动注册控制器路由

- **参数**:
    - `controllerClasses` string|array 控制器类名（单个类名或类名数组）

[↩️ 返回类目录](#utils-route) | [⬆️ 返回顶部](#start)

<a id="utils-route-clear"></a>

#### `clear` `(static)`

清空所有路由（测试/重置场景用）

[↩️ 返回类目录](#utils-route) | [⬆️ 返回顶部](#start)

<a id="utils-route-getroutes"></a>

#### `getRoutes` `(static)`

获取已注册的路由列表（调试用）

- **返回**: `array` 路由规则数组

[↩️ 返回类目录](#utils-route) | [⬆️ 返回顶部](#start)

<a id="utils-route-hasroute"></a>

#### `hasRoute` `(static)`

检查路由是否已存在（避免重复注册）

- **参数**:
    - `method` string 请求方法
    - `path` string 路由路径

- **返回**: `bool` 是否存在

[↩️ 返回类目录](#utils-route) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-worker"></a>

## Worker 类

> 完整类名: `Utils\Worker`

### 📋 可用方法

**方法导航**: [`getInstance`](#utils-worker-getinstance) | [`getWorkerList`](#utils-worker-getworkerlist) | [`addWorker`](#utils-worker-addworker) | [`removeWorker`](#utils-worker-removeworker)

<a id="utils-worker-getinstance"></a>

#### `getInstance` `(static)`

[↩️ 返回类目录](#utils-worker) | [⬆️ 返回顶部](#start)

<a id="utils-worker-getworkerlist"></a>

#### `getWorkerList`

核心方法：获取Worker列表，不存在则自动初始化空列表

[↩️ 返回类目录](#utils-worker) | [⬆️ 返回顶部](#start)

<a id="utils-worker-addworker"></a>

#### `addWorker`

新增Worker（插件启用）

- **参数**:
    - `className` string 完整类名（如App\Plugins\Demo）

[↩️ 返回类目录](#utils-worker) | [⬆️ 返回顶部](#start)

<a id="utils-worker-removeworker"></a>

#### `removeWorker`

删除Worker（插件禁用）

- **参数**:
    - `className` string 完整类名

[↩️ 返回类目录](#utils-worker) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

<a id="utils-yargs"></a>

## Yargs 类

> 完整类名: `Utils\Yargs`

### 📋 可用方法

**方法导航**: [`getInstance`](#utils-yargs-getinstance) | [`command`](#utils-yargs-command) | [`option`](#utils-yargs-option) | [`positional`](#utils-yargs-positional) | [`getHelp`](#utils-yargs-gethelp) | [`parse`](#utils-yargs-parse)

<a id="utils-yargs-getinstance"></a>

#### `getInstance` `(static)`

[↩️ 返回类目录](#utils-yargs) | [⬆️ 返回顶部](#start)

<a id="utils-yargs-command"></a>

#### `command`

注册命令描述（支持子命令）

[↩️ 返回类目录](#utils-yargs) | [⬆️ 返回顶部](#start)

<a id="utils-yargs-option"></a>

#### `option`

注册选项参数规则

[↩️ 返回类目录](#utils-yargs) | [⬆️ 返回顶部](#start)

<a id="utils-yargs-positional"></a>

#### `positional`

注册位置参数规则

[↩️ 返回类目录](#utils-yargs) | [⬆️ 返回顶部](#start)

<a id="utils-yargs-gethelp"></a>

#### `getHelp`

生成帮助信息

[↩️ 返回类目录](#utils-yargs) | [⬆️ 返回顶部](#start)

<a id="utils-yargs-parse"></a>

#### `parse`

解析入口

[↩️ 返回类目录](#utils-yargs) | [⬆️ 返回顶部](#start)

[⬆️ 返回顶部](#start)

---

