��用户 OneDrive 的最大大小</string>
      <string id="DiskSpaceCheckThresholdMB_help">此设置与“让客户使用 Windows 凭据以无提示方式登录 OneDrive 同步应用”结合使用。使用此设置，可提示 OneDrive 中的内容超出指定量的用户在 OneDrive 同步应用(OneDrive.exe)安装期间选择要同步的文件夹。

如果启用此设置，则在 OneDrive 安装期间，默认对内容超出指定值的用户显示“选择文件夹”对话框。

如果禁用或不配置此设置，则当用户设置同步应用时，将选择同步所有文件。</string>

      <!-- Settings below control behavior of Files-On-Demand (Cloud Files) -->
      <string id="FilesOnDemandEnabled">使用 OneDrive 文件随选</string>
      <string id="FilesOnDemandEnabled_help">利用此设置，可以显式控制是否为组织启用 OneDrive 文件随选。

如果启用此设置，默认情况下，OneDrive 文件随选处于打开状态。

如果禁用此设置，将显式禁用 OneDrive 文件随选，用户不能将其打开。

如果不配置此设置，用户将可以打开或关闭 OneDrive 文件随选。</string>

      <string id="DehydrateSyncedTeamSites">将已同步的团队网站文件转换为仅联机文件</string>
      <string id="DehydrateSyncedTeamSites_help">此设置与“OneDrive 文件随选”结合使用。当多名用户同步同一团队网站时，此设置可将已同步的团队网站文件转换为仅联机文件，从而节省带宽，并跨设备释放空间。

如果启用此设置，则在启用 OneDrive 文件随选之前同步的团队网站文件将转换(一次性操作)为仅联机文件。

如果禁用或不配置此设置，则团队网站文件仍在本地可用，除非用户选择将其转换为仅联机。</string>

    <!-- Restrict syncing with other organizations -->
      <string id="AllowTenantList">仅允许同步特定组织的 OneDrive 帐户</string>
      <string id="AllowTenantList_help">此设置可指定允许的租户 ID 列表，从而防止用户轻易将文件上传到其他组织。

如果启用此设置，则用户试图添加属于不允许的组织的帐户时将收到错误。如果用户已添加帐户，则文件将停止同步。

如果禁用或不配置此设置，则用户可以添加属于任何组织的帐户。

若要改为阻止特定组织，请使用“阻止同步特定组织的 OneDrive 帐户”。

此设置优先于“阻止同步特定组织的 OneDrive 帐户”。请勿同时启用这两个策略。</string>

      <string id="BlockTenantList">阻止同步特定组织的 OneDrive 帐户</string>
      <string id="BlockTenantList_help">此设置可指定阻止的租户 ID 列表，从而防止用户轻易将文件上传到其他组织。

如果启用此设置，则用户试图添加属于已阻止组织的帐户时将收到错误。如果用户已添加帐户，则文件将停止同步。

如果禁用或不配置此设置，则用户可以添加属于任何组织的帐户。

若要改为指定允许的组织列表，请使用“仅允许同步特定组织的 OneDrive 帐户”。

如果启用了“仅允许同步特定组织的 OneDrive 帐户”，则此设置将无效。请勿同时启用这两个策略。</string>

    <!-- SharePoint Server 2019 settings -->
    <string id="SharePointOnPremFrontDoorUrl">指定 SharePoint Server URL 和组织名称</string>
    <string id="SharePointOnPremFrontDoorUrl_help">此设置允许用户使用 OneDrive 同步应用 (OneDrive) 同步 SharePoint Server 2019 中的文件. URL 定义 SharePoint 服务器的位置, 并启用同步应用以进行身份验证和设置同步. 组织名称用于指定将在文件资源管理器中创建的 OneDrive 和 SharePoint 文件夹名称. 组织名称是可选的. 如果不提供, 同步应用将使用 URL 的第一段作为名称. 例如, office.sharepoint.com 将变为 "Office", OneDrive 文件夹名称将为 "OneDrive-Office". 

如果启用此设置并提供 SharePoint Server URL, 则用户将能够在 SharePoint Server 2019 中同步文件. 

如果禁用或未配置此设置, 或未提供 SharePoint Server URL, 则用户将无法在 SharePoint Server 2019 中同步文件. </string>

    <string id="SharePointOnPremPrioritization">在混合环境中指定 OneDrive 位置</string>
    <string id="SharePointOnPremPrioritization_help">此设置定义如果身份在两个身份提供程序中都存在, 则 OneDrive 同步应用 (OneDrive) 是否应根据 SharePoint Online 或 SharePoint Server 2019 进行身份验证. 若要使用此设置, 您还必须启用 "指定 SharePoint Server URL 和组织名称". 此设置仅影响 OneDrive for business 同步功能. 它不影响 SharePoint Online 或 SharePoint Server 2019 中的同步团队网站. 

如果启用此设置, 则可选择以下两个选项之一: 

SharePoint Online: 同步应用将首先在 SharePoint Online 中查找用户的 OneDrive. 如果已为用户配置了同步应用程序的 SharePoint Online, 它将尝试为该用户在 SharePoint Server 2019 中配置 OneDrive for business 实例. 

SharePoint Server 2019: 同步应用将首先在 SharePoint Server 2019 中查找用户的 OneDrive for Business. 如果已为用户配置了同步应用程序的 SharePoint Serv