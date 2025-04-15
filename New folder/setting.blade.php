<x-betaversion.layout-dashboard>
 @csrf
      <div class="section-product all-panel active">
         <div class="container-fluid">
            <div class="row" id="settingMainSection">
             <div class="col-lg-2 col-md-3 col-12">
                  <div class="templatecategory_sidebar">
                     <ul>
                        <li for="settingProfile" class="active"><span class="material-symbols-outlined me-3">settings_account_box</span> Profile </li>
                        <li for="userManage"><span class="material-icons-outlined me-3">manage_accounts</span>User Manage</li>
                        <li for="customerManage"><span class="material-icons-outlined me-3"> supervisor_account </span>Customer Manage</li>
                        <li for="manageTags"><span class="material-icons-outlined me-3"> local_offer </span>Manage Tags</li>
                        <li for="developerTools"><span class="material-symbols-outlined me-3">developer_mode_tv</span>Developer Tools</li>
                        <li for="planAndBillings"><span class="material-symbols-outlined me-3"> local_atm </span>Plan and Billings</li>
                        <!-- <li for="manualOnbording"><span class="material-symbols-outlined me-3">engineering</span>Manual Onbording</li> -->
                        <li for="whatsAppProfile"><i class="fa-brands fa-whatsapp me-3 fs-4"></i>WhatsApp Profile</li>
                     </ul>
                  </div>
               </div> 
               <div class="col-lg-10 col-md-9 col-12">
                 <div class="setting_profile" id="settingProfile">
                     <h2 class="product-title mb-3">Profile</h2>
                     <div class="setting_profile_box" id="settingProfileBox">
                       <div class="setting_profile_box_header">
                        <div class="user_profile_status">
                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}" id="settingProfileBoxImg">
                         <div class="user_name_status">
                           <span id="settingProfileName">Divya Rastogi</span>
                           <span class="user_status_text"><span class="status_cricle"></span>Online</span> 
                         </div> 
                        </div>
                        <div class="profile_edit_icon" id="settingProfileBoxEdit">
                           <span class="material-symbols-outlined"> edit_square </span>
                        </div>  
                       </div>
                       <div class="user_profile_information">
                         <div class="user_profile_information_items">
                           <span>Email</span>
                           <span id="settingProfileEmail">Divyarastogi@gmail.com</span> 
                         </div>
                         <div class="user_profile_info "></div>
                         <div class="user_profile_information_items">
                           <span>Phone</span>
                           <span id="settingProfileContactNumber">+917463823892</span> 
                         </div>
                         <div class="user_profile_info "></div>
                         <div class="user_profile_information_items">
                           <span>User Type</span>
                           <span>Executive</span> 
                         </div>
                         <div class="user_profile_info "></div>
                         <div class="user_profile_information_items">
                           <span>Designation</span>
                           <span>Sales Executive</span> 
                         </div> 
                       </div> 
                     </div>
                     <div class="setting_profile_update_box mt-5" id="settingProfileUpdateBox" style="display: none;">
                       <!-- Header -->
                             <div class="profile_update_header">
                                 <h5 class="mb-0">Update Profile</h5>
                             </div>

                             <div class="profile_update_box_body">
                                 <div class="profile_update_container">
                                        <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}" alt="Profile Picture" class="profile-image mb-3" id="profileUpdateImg">
                                        <button id="profileUpdateImgBtn">Change Photo</button>
                                        <button class="mt-3">Remove <span class="material-symbols-outlined ms-3">delete</span></button>
                                    </div>
                                     <div class="profile_update_border_container"></div>
                                     <div class="profile_update_info_container">
                                      <div class="profile_update_name">
                                          <label for="username" class="form-label template_labls">Full Name <span style="color: red;">*</span></label>
                                          <input type="text" name="templatename" maxlength="60" class="form-control template-input" id="profileUpdateNameInput" placeholder="Divya Rastogi" >
                                       </div>
                                       <div class="profile_update_contact mt-4">
                                         <label for="username" class="form-label template_labls">Contact Number <span style="color: red;">*</span></label>
                                         <div class="profile_update_contact_number">
                                            <select class="form-select template-input" aria-label="Default select example" id="profileUpdateContactSelect">
                                               <option selected>US  +1</option>
                                               <option value="1">US  +91</option>
                                               <option value="2">US  +2</option>
                                               <option value="3">US  +3</option>
                                             </select>
                                          <div class="profile_update_name">
                                          <input type="text" name="templatename" maxlength="60" class="form-control template-input" id="profileUpdateContactNumber" required="" placeholder="9222568145">
                                       </div>
                                         </div> 
                                       </div> 
                                       <div class="profile_update_name mt-4">
                                          <label for="username" class="form-label template_labls">Email <span style="color: red;">*</span></label>
                                          <input type="text" name="templatename" maxlength="60" class="form-control template-input" placeholder="e.g. info@getgabs.com" required="">
                                       </div> 
                                     </div>
                             </div>
                             <div class="profile_update_footer">
                                 <button id="settingProfileUpdate"><span class="material-symbols-outlined"> refresh </span> Update</button>
                             </div> 
                     </div>      
                 </div> 
                 <div class="user_manage" id="userManage" style="display: none;">
                  <div class="user_manage_main_section" id="userManageMainSection">
                    <div class="hedader-create-flow-btn -mb-4">
                              <h2 class="product-title">User Manage</h2>
                              <button class="create-flow-btn" id="userManageAddUser" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                 <i class="fa-solid fa-plus"></i> Add User
                                 </button>
                           </div>
                   <div class="container-fluid py-4">
                              <!-- Total Flows -->
                              <div class="d-flex align-items-center mb-4">
                                 <div class="user_active_status userDetails">
                                   <div class="user_active_status_items active" id="getusertype-all">
                                     All User  30 
                                   </div>
                                   <div class="user_active_status_items" id="getusertype-active">
                                     Active  25
                                   </div>
                                   <div class="user_active_status_items d-flex align-items-center" id="getusertype-online">
                                     <span class="status_cricle me-2"></span> Online
                                   </div> 
                                 </div>
                                 <button class="delete-flow-template btn-sm ms-3" data-bs-toggle="modal" data-bs-target="#templateDeleteModal">
                                 <i class="fa-solid fa-trash-can me-2"></i> Delete
                                 </button>
                                 <button class="manage_routing_rules_btn btn-sm ms-3" id="manageAccessPermissionsBtn">
                                      Manage Access & Permissions
                                 </button>
                              </div>
                              <div class="template_view_tables">
                                 <!-- Tabs and Search -->
                              <div class="template_view_header d-flex justify-content-between align-items-center">
                                 <div class="dropdown_3" id="manageTagsDropdown3_new">
                                  <div class="dropdown-header" id="manageTagsDropdown_selected_new">
                                      <span class="selected_items d-flex align-items-center" id="manageTagsSelectedItems_new">
                                          <span class="material-icons me-2 user-manage-filter"> filter_list </span>Apply Filters
                                      </span>
                                      <i class="fa-solid fa-angle-down"></i>
                                  </div>
                                  <ul class="dropdown-list manageTagsDropdown_newClass" id="manageTagsDropdown_new" style="display: none;">
                                      <div class="filter-label">Filter By</div>
                                      <li class="dropdown-items manageTagsDropdown_items_new">
                                          <span class="status-text active" id="department-all"><i class="fa-solid fa-bars me-2"></i>Department * All</span>
                                      </li>
                                      <li class="dropdown-items manageTagsDropdown_items_new">
                                          <span id="department-sales"><i class="fa-solid fa-bars me-2"></i>Department * Sales</span>
                                      </li>                                      
                                      <li class="dropdown-items manageTagsDropdown_items_new">
                                          <span id="department-manager"><i class="fa-solid fa-bars me-2"></i>Role * Manager</span>
                                      </li>
                                      <li class="dropdown-items manageTagsDropdown_items_new">
                                          <span id="department-sub-user"><i class="fa-solid fa-bars me-2"></i>Role * Executive</span>
                                      </li>
                                  </ul>
                              </div>
                                 <div class="template_tables_search_container d-flex justify-content-between align-items-center">
                                    <div class="search_container_icon_input">
                                             <i class="bi bi-search"></i>
                                             <input type="search" class="form-control search_container_input" id="searchUser" placeholder="Search for users">
                                          </div>
                                    <div class="table_data_export">
                                       <i class="fa-solid fa-ellipsis-vertical ms-3" onclick="exportAsCSV(this)"></i>
                                       <div class="table_data_export_body" style="display: none;">
                                        <div class="table_data_export_body_items">
                                           <span><span class="material-symbols-outlined me-3"> export_notes </span>Export as CSV</span>
                                        </div>
                                        <div class="table_data_export_body_items">
                                          <span><span class="material-symbols-outlined me-3"> table_eye </span>Show or Hide Column </span>
                                        </div>  
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- Table -->
                              <div class="all_contacts_list_table">
                                <div class="table-responsive">
                                 <table class="table table-hover align-middle">
                                    <thead class="table-light template_view_tables_thead">
                                       <tr>
                                          <th style="width: 4%;">
                                             <span class="view_tables_namber_span">1</span>
                                          </th>
                                          <th>User Name</th>
                                          <th>Mail</th>
                                          <th>User Type</th>
                                          <th>Designation </th>
                                          <th>Actions</th>
                                       </tr> 
                                    </thead>
                                    <tbody class="template_view_tables_tbody user_manage_tables" id="userlist">
                                    <!-- Add User List Here -->
                                    </tbody>
                                 </table>
                              </div> 
                              </div>
                              </div>
                              <!-- Pagination -->
                              <div class="d-flex justify-content-between align-items-center mt-4">
                                 <div class="d-flex align-items-center">
                                    <select class="form-select form-select-sm pagination-select" style="width: 70px;" id="showPerPageData">
                                        <option>5</option>
                                       <option selected>10</option>
                                       <option>20</option>
                                       <option>50</option>
                                    </select>
                                    <span class="me-2">Show on page</span>
                                 </div>

                             <div id="userlistpagination"></div>


                              </div>
                           </div> 
                  </div>
                  <div class="manage_access_permissions" id="manageAccessPermissions" style="display: none;">
                     <div class="hedader-create-flow-btn -mb-4">
                              <h2 class="product-title">Manage Access & Permissions</h2>
                              <button class="create-flow-btn" id="manageIndividualAccess">
                                  Manage Individual Access
                                 </button>
                           </div>
                           <div class="user_active_status mt-2">
                                   <div class="user_active_status_items active">
                                     Sub-Admin
                                   </div>
                                   <div class="user_active_status_items">
                                     Executive
                                   </div>
                                 </div>
                                 <div class="permissions_accordion_box mt-3">
                                    <div class="accordion" id="sidebarAccordion">
                <!-- Dashboard -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingDashboard">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDashboard" aria-expanded="false" aria-controls="collapseDashboard">
                            <span class="material-icons me-2">dashboard</span>
                            Dashboard
                        </button>
                    </h2>
                    <div id="collapseDashboard" class="accordion-collapse collapse" aria-labelledby="headingDashboard" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Dashboard Visible To User</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right csthree">
                               <span class="accordion-body-items-right-span firstinput">With Limited Access <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">With Full Access <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- Chats / Team inbox -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingChats">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChats" aria-expanded="false" aria-controls="collapseChats">
                            <span class="material-icons-outlined me-2">
                                 forum
                                 </span>
                            Chats / Team inbox
                        </button>
                    </h2>
                    <div id="collapseChats" class="accordion-collapse collapse" aria-labelledby="headingChats" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Chats</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right csthree">
                               <span class="accordion-body-items-right-span firstinput">Assigned to User <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">All Chats <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <h4 class="accordion-body_h4 mt-3">Chat Tools</h4>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create Shortcut</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create QR Code</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create Chat Widget</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- Automation -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAutomation">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAutomation" aria-expanded="false" aria-controls="collapseAutomation">
                            <i class="fa-solid fa-robot me-2 fs-4"></i>
                            Automation
                        </button>
                    </h2>
                    <div id="collapseAutomation" class="accordion-collapse collapse" aria-labelledby="headingAutomation" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Auto Reply</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Chat Flow Builder</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Chat Routing Rule</span>
                               <span class="accordion-body-items_nots">*Only for Admin Recommended</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- Templates -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTemplates">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTemplates" aria-expanded="false" aria-controls="collapseTemplates">
                            <i class="fa-solid fa-table me-2 fs-4"></i>
                            Templates
                        </button>
                    </h2>
                    <div id="collapseTemplates" class="accordion-collapse collapse" aria-labelledby="headingTemplates" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Template List</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create Templates</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Template Library</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Flow / Form</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- Analytics and Report -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAnalytics">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAnalytics" aria-expanded="false" aria-controls="collapseAnalytics">
                            <span class="material-icons-outlined me-2">
                                 bar_chart
                                 </span>
                            Analytics and Report
                        </button>
                    </h2>
                    <div id="collapseAnalytics" class="accordion-collapse collapse" aria-labelledby="headingAnalytics" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Template List</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create Templates</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Template Library</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Flow / Form</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- Settings -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSettings">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                            <span class="material-icons-outlined me-2">
                                 settings
                                 </span>
                            Settings
                        </button>
                    </h2>
                    <div id="collapseSettings" class="accordion-collapse collapse" aria-labelledby="headingSettings" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Template List</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create Templates</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Template Library</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Flow / Form</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- General Access -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAccess">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccess" aria-expanded="false" aria-controls="collapseAccess">
                            <span class="material-symbols-outlined me-2"> passkey </span>
                            General Access
                        </button>
                    </h2>
                    <div id="collapseAccess" class="accordion-collapse collapse" aria-labelledby="headingAccess" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Template List</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create Templates</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Template Library</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Flow / Form</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
                                 </div>
                  </div> 
                 </div>
                 <div class="customer_manage" id="customerManage" style="display: none;">
                   <div class="hedader-create-flow-btn -mb-4">
                     <h2 class="product-title">Customer Manage</h2>
                     <button class="create-flow-btn" id="customerManageAssignChat">
                      Assign Chat
                     </button>
                  </div>
                  <div class="select_agents_boxs" id="customerManageSelectAgentsBoxs">
                     <div class="select_agents_boxs_header">
                        <h4 class="ms-4">Select Agents</h4>
                        <button>Assign</button>
                        <span class="material-symbols-outlined distribution-rule-close" id="customerManageselectAgentsBoxClose"> close </span>
                     </div>
                     <div class="select_agents_filter">
                        <div class="select_agents_filter_items">
                           <input type="checkbox" id="filterByTagCheckbox2" class="form-check-input template_view_table_check">
                           <span>Filter By Tag</span>  
                        </div>
                        <div class="select_agents_filter_items">
                           <input type="checkbox" id="selectAllassignedAgents" class="form-check-input template_view_table_check">
                           <span>Select All</span>  
                        </div>
                     </div>
                     <div class="select_agents_searchbar mt-3">
                        <div class="search_container_icon_input" id="selectAgentsSearchbar2">
                           <i class="bi bi-search me-3"></i>
                           <input type="search" class="form-control search_container_input" placeholder="Search for Agents" id="">
                        </div>
                        <div class="selectAgents-tags-dropdown" id="selectAgentsSelectTag2" style="display: none;">
                             <div class="selectAgents-tags-selected">Select Routing Rule</div>
                             <ul class="selectAgentstagsdropdown-list">
                               <li data-value="tag1">Select Agents</li>
                               <li data-value="tag2">Select Agents 2</li>
                               <li data-value="tag3">Select Agents 3</li>
                               <li data-value="tag4">Select Agents 4</li>
                               <li data-value="tag6">Select Agents 5</li>
                             </ul>
                           </div>
                     </div>
                     <div class="all_registered_agents">
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                        <div class="all_registered_agents_items customermanage-assignedagents mt-3" onclick="assignedAgents()">
                           <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                           <div class="registered_agents_name">
                              <span>Divya Rastogi</span>
                              <span>Id : divyarastogi@gmail.com</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="">
                     <!-- Total Flows -->
                     <div class="d-flex align-items-center mb-4">
                        <span class="me-3">Total Customer: 1000</span>
                         <button class="delete-flow-template btn-sm ms-3" data-bs-toggle="modal" data-bs-target="#templateDeleteModal">
                                 <i class="fa-solid fa-trash-can me-2"></i> Delete
                                 </button>
                                 <button class="manage_routing_rules_btn btn-sm ms-3" id="customerManageRoutingRules">
                                      Manage Routing Rules
                                 </button>
                     </div>
                     <div class="template_view_tables">
                        <!-- Tabs and Search -->
                        <div class="template_view_header d-flex justify-content-between align-items-center">
                           <div class="dropdown_3" id="customerManageDropdown3">
                              <div class="dropdown-header" id="customerManageDropdown_selected">
                                 <span class="selected_items" id="customerManageSelectedItems">All</span>
                                 <i class="fa-solid fa-angle-down"></i>
                              </div>
                              <ul class="dropdown-list" id="customerManageDropdown" style="display: none;">
                                 <div class="filter-label">Filter By</div>
                                 <li class="dropdown-items customerManageDropdown_itemas">
                                    <span class="status-text"><i class="fa-solid fa-bars me-2"></i>All</span>
                                 </li>
                                 <li class="dropdown-items customerManageDropdown_itemas">
                                    <span><i class="fa-solid fa-bars me-2"></i>Country Code</span>
                                 </li>
                                 <li class="dropdown-items customerManageDropdown_itemas">
                                    <span><i class="fa-solid fa-bars me-2"></i>Keyword</span>
                                 </li>
                              </ul>
                           </div>
                           <div class="template_tables_search_container d-flex justify-content-between align-items-center">
                              <div class="search_container_icon_input">
                                 <i class="bi bi-search"></i>
                                 <input type="search" class="form-control search_container_input" placeholder="Search by whatsApp number or, Agent Name">
                              </div>
                              <div class="table_data_export">
                                 <i class="fa-solid fa-ellipsis-vertical ms-3" onclick="exportAsCSV(this)"></i>
                                 <div class="table_data_export_body" style="display: none;">
                                    <div class="table_data_export_body_items">
                                       <span><span class="material-symbols-outlined me-3"> export_notes </span>Export as CSV</span>
                                    </div>
                                    <div class="table_data_export_body_items">
                                       <span><span class="material-symbols-outlined me-3"> table_eye </span>Show or Hide Column </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Table -->
                        <div class="all_contacts_list_table">
                           <div class="table-responsive">
                              <table class="table table-hover align-middle">
                                 <thead class="table-light template_view_tables_thead">
                                    <tr>
                                       <th style="width: 4%;">
                                             <span class="view_tables_namber_span">1</span>
                                          </th>
                                       <th style="text-align: center;">Customer Name</th>
                                       <th style="text-align: center;">Country Code</th>
                                       <th style="text-align: center;">WhatsApp No.</th>
                                       <th style="text-align: center;">Assigned By</th>
                                       <th style="text-align: center;">Assigned To</th>
                                       <th style="text-align: center;">Tags Added</th>
                                    </tr>
                                 </thead>
                                 <tbody class="template_view_tables_tbody" id="customerListManage">
                                    <!-- Add more rows as needed -->
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <!-- Pagination -->
                     <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex align-items-center">
                           <select class="form-select form-select-sm pagination-select" style="width: 70px;" id="customerlistpaginationperpage">
                              <option>5</option>
                              <option selected>10</option>
                              <option>20</option>
                              <option>50</option>
                           </select>
                           <span class="me-2">Show on page</span>
                        </div>
        <div id="customerlistpaginationlinkview">
           <!--Pagination Nav Code    -->
        </div>
   
                     </div>
                  </div> 
                 </div>
                 <div class="manage_tags" id="manageTags" style="display: none;">
                   <div class="hedader-create-flow-btn -mb-4">
                     <h2 class="product-title">Manage Tags</h2>
                     <button class="create-flow-btn" id="createTag" data-bs-toggle="modal" data-bs-target="#createTagModal">
                     <i class="fa-solid fa-plus"></i> Create Tag
                     </button>
                  </div>
                  <div class="">
                     <!-- Total Flows -->
                     <div class="d-flex align-items-center mb-4">
                                 <span class="me-3">Total Tags : 30</span>
                                 <button class="delete-flow-template btn-sm ms-3" data-bs-toggle="modal" data-bs-target="#templateDeleteModal">
                                 <i class="fa-solid fa-trash-can me-2"></i> Delete
                                 </button>
                                 <button class="manage_routing_rules_btn btn-sm ms-3">
                                 <i class="fa-solid fa-trash-can me-2"></i> Manage Routing Rules
                                 </button>
                              </div>
                                 <div class="template_view_tables">
                                    <!-- Tabs and Search -->
                                    <div class="template_view_header d-flex justify-content-between align-items-center">
                                       <div class="dropdown_3" id="manageTagsDropdown3">
                                          <div class="dropdown-header" id="manageTagsDropdown_selected">
                                             <span class="selected_items" id="manageTagsSelectedItems">All</span>
                                             <i class="fa-solid fa-angle-down"></i>
                                          </div>
                                          <ul class="dropdown-list" id="manageTagsDropdown" style="display: none;">
                                             <div class="filter-label">Filter By</div>
                                             <li class="dropdown-items manageTagsDropdown_itemas">
                                                <span class="status-text"><i class="fa-solid fa-bars me-2"></i>All</span>
                                             </li>
                                             <li class="dropdown-items manageTagsDropdown_itemas">
                                                <span><i class="fa-solid fa-bars me-2"></i>Country Code</span>
                                             </li>
                                             <li class="dropdown-items manageTagsDropdown_itemas">
                                                <span><i class="fa-solid fa-bars me-2"></i>Keyword</span>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="template_tables_search_container d-flex justify-content-between align-items-center">
                                          <div class="search_container_icon_input">
                                             <i class="bi bi-search"></i>
                                             <input type="search" class="form-control search_container_input" placeholder="Search  for Tags">
                                          </div>
                                          <div class="table_data_export">
                                             <i class="fa-solid fa-ellipsis-vertical ms-3" onclick="exportAsCSV(this)"></i>
                                             <div class="table_data_export_body" style="display: none;">
                                                <div class="table_data_export_body_items">
                                                   <span><span class="material-symbols-outlined me-3"> export_notes </span>Export as CSV</span>
                                                </div>
                                                <div class="table_data_export_body_items">
                                                   <span><span class="material-symbols-outlined me-3"> table_eye </span>Show or Hide Column </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Table -->
                                    <div class="all_contacts_list_table">
                                       <div class="table-responsive">
                                          <table class="table table-hover align-middle mb-0">
                                             <thead class="table-light template_view_tables_thead">
                                                <tr>
                                                   <th>
                                                      <span class="view_tables_namber_span">1</span>
                                                   </th>
                                                   <th>Tag Name</th>
                                                   <th>Visibility</th>
                                                   <th>Creation </th>
                                                   <th>Assigned To</th>
                                                   <th>Actions</th>
                                                </tr>
                                             </thead>
                                             <tbody class="template_view_tables_tbody">
                                                <tr>
                                                   <td>
                                                      <input type="checkbox" class="form-check-input template_view_table_check">
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;width: 20%;">Potential Lead</td>
                                                   <td style="border-right: 1px solid #ccc;width: 10%;">Public</td>
                                                   <td style="border-right: 1px solid #ccc;width: 25%;">
                                                      <span class="creation_span">
                                                         <span>By : Gaurav Sharma</span>
                                                         <span>12/08/2025  16:04 GMT</span>
                                                      </span>
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;">
                                                      <div class="assigned_agents">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <div>20+</div>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="action-icons">
                                                         <div class="action-icons-edit">
                                                            <span class="material-icons-outlined" data-bs-toggle="modal" data-bs-target="#editContactsList"> edit
                                                            </span>
                                                            <span class="view-edit-txt">Edit</span>
                                                         </div>
                                                         <div class="action-icons-api">
                                                            <span class="view-api-txt">Delete</span>
                                                            <i class="fa-solid fa-trash-can me-2"></i>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <input type="checkbox" class="form-check-input template_view_table_check">
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;width: 20%;">Potential Lead</td>
                                                   <td style="border-right: 1px solid #ccc;width: 10%;">Public</td>
                                                   <td style="border-right: 1px solid #ccc;width: 25%;">
                                                      <span class="creation_span">
                                                         <span>By : Gaurav Sharma</span>
                                                         <span>12/08/2025  16:04 GMT</span>
                                                      </span>
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;">
                                                      <div class="assigned_agents">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <div>20+</div>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="action-icons">
                                                         <div class="action-icons-edit">
                                                            <span class="material-icons-outlined" data-bs-toggle="modal" data-bs-target="#editContactsList"> edit
                                                            </span>
                                                            <span class="view-edit-txt">Edit</span>
                                                         </div>
                                                         <div class="action-icons-api">
                                                            <span class="view-api-txt">Delete</span>
                                                            <i class="fa-solid fa-trash-can me-2"></i>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <input type="checkbox" class="form-check-input template_view_table_check">
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;width: 20%;">Potential Lead</td>
                                                   <td style="border-right: 1px solid #ccc;width: 10%;">Public</td>
                                                   <td style="border-right: 1px solid #ccc;width: 25%;">
                                                      <span class="creation_span">
                                                         <span>By : Gaurav Sharma</span>
                                                         <span>12/08/2025  16:04 GMT</span>
                                                      </span>
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;">
                                                      <div class="assigned_agents">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <div>20+</div>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="action-icons">
                                                         <div class="action-icons-edit">
                                                            <span class="material-icons-outlined" data-bs-toggle="modal" data-bs-target="#editContactsList"> edit
                                                            </span>
                                                            <span class="view-edit-txt">Edit</span>
                                                         </div>
                                                         <div class="action-icons-api">
                                                            <span class="view-api-txt">Delete</span>
                                                            <i class="fa-solid fa-trash-can me-2"></i>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr class="sales-row">
                                                   <td>
                                                       <input type="checkbox" class="form-check-input template_view_table_check">
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;">
                                                       <div class="d-flex align-items-center">
                                                           <i class="bi bi-chevron-down me-2"></i>
                                                           <span class="material-symbols-outlined folder-icon me-2"> folder_open </span>
                                                           Sales
                                                       </div>
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;width: 10%;">Public</td>
                                                   <td style="border-right: 1px solid #ccc;width: 25%;">
                                                       <div>By : Gaurav Sharma</div>
                                                       <small class="text-muted">12/08/2025 16:04 GMT</small>
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;">
                                                       <div class="assigned_agents">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <div>20+</div>
                                                      </div>
                                                   </td>
                                                   <td>
                                                       <div class="action-icons">
                                                         <div class="action-icons-edit">
                                                            <span class="material-icons-outlined" data-bs-toggle="modal" data-bs-target="#editContactsList"> edit
                                                            </span>
                                                            <span class="view-edit-txt">Edit</span>
                                                         </div>
                                                         <div class="action-icons-api">
                                                            <span class="view-api-txt">Delete</span>
                                                            <i class="fa-solid fa-trash-can me-2"></i>
                                                         </div>
                                                      </div>
                                                   </td>
                                               </tr>
                                               
                                                <!-- Add more rows as needed -->
                                             </tbody>
                                          </table>
                                          <div class="nested-row" style="display: none;">
                                             <table class="table table-hover align-middle mb-0">
                                             <tbody class="template_view_tables_tbody">
                                                <tr>
                                                   <td>
                                                      <input style="visibility:hidden;" type="checkbox" class="form-check-input template_view_table_check">
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;width: 20%;">Potential Lead new</td>
                                                   <td style="border-right: 1px solid #ccc;width: 10%;">Public</td>
                                                   <td style="border-right: 1px solid #ccc;width: 25%;">
                                                      <span class="creation_span">
                                                         <span>By : Gaurav Sharma</span>
                                                         <span>12/08/2025  16:04 GMT</span>
                                                      </span>
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;">
                                                      <div class="assigned_agents">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <div>20+</div>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="action-icons">
                                                         <div class="action-icons-edit">
                                                            <span class="material-icons-outlined" data-bs-toggle="modal" data-bs-target="#editContactsList"> edit
                                                            </span>
                                                            <span class="view-edit-txt">Edit</span>
                                                         </div>
                                                         <div class="action-icons-api">
                                                            <span class="view-api-txt">Delete</span>
                                                            <i class="fa-solid fa-trash-can me-2"></i>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <input style="visibility:hidden;" type="checkbox" class="form-check-input template_view_table_check">
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;width: 20%;">Potential Lead new</td>
                                                   <td style="border-right: 1px solid #ccc;width: 10%;">Public</td>
                                                   <td style="border-right: 1px solid #ccc;width: 25%;">
                                                      <span class="creation_span">
                                                         <span>By : Gaurav Sharma</span>
                                                         <span>12/08/2025  16:04 GMT</span>
                                                      </span>
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;">
                                                      <div class="assigned_agents">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <div>20+</div>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="action-icons">
                                                         <div class="action-icons-edit">
                                                            <span class="material-icons-outlined" data-bs-toggle="modal" data-bs-target="#editContactsList"> edit
                                                            </span>
                                                            <span class="view-edit-txt">Edit</span>
                                                         </div>
                                                         <div class="action-icons-api">
                                                            <span class="view-api-txt">Delete</span>
                                                            <i class="fa-solid fa-trash-can me-2"></i>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                             </tbody>
                                          </table>
                                          </div>
                                          <table class="table table-hover align-middle">
                                             <tbody class="template_view_tables_tbody">
                                                <tr>
                                                   <td>
                                                      <input type="checkbox" class="form-check-input template_view_table_check">
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;width: 20%;">Potential Lead</td>
                                                   <td style="border-right: 1px solid #ccc;width: 10%;">Public</td>
                                                   <td style="border-right: 1px solid #ccc;width: 25%;">
                                                      <span class="creation_span">
                                                         <span>By : Gaurav Sharma</span>
                                                         <span>12/08/2025  16:04 GMT</span>
                                                      </span>
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;">
                                                      <div class="assigned_agents">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <div>20+</div>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="action-icons">
                                                         <div class="action-icons-edit">
                                                            <span class="material-icons-outlined" data-bs-toggle="modal" data-bs-target="#editContactsList"> edit
                                                            </span>
                                                            <span class="view-edit-txt">Edit</span>
                                                         </div>
                                                         <div class="action-icons-api">
                                                            <span class="view-api-txt">Delete</span>
                                                            <i class="fa-solid fa-trash-can me-2"></i>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <input type="checkbox" class="form-check-input template_view_table_check">
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;width: 20%;">Potential Lead</td>
                                                   <td style="border-right: 1px solid #ccc;width: 10%;">Public</td>
                                                   <td style="border-right: 1px solid #ccc;width: 25%;">
                                                      <span class="creation_span">
                                                         <span>By : Gaurav Sharma</span>
                                                         <span>12/08/2025  16:04 GMT</span>
                                                      </span>
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;">
                                                      <div class="assigned_agents">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <div>20+</div>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="action-icons">
                                                         <div class="action-icons-edit">
                                                            <span class="material-icons-outlined" data-bs-toggle="modal" data-bs-target="#editContactsList"> edit
                                                            </span>
                                                            <span class="view-edit-txt">Edit</span>
                                                         </div>
                                                         <div class="action-icons-api">
                                                            <span class="view-api-txt">Delete</span>
                                                            <i class="fa-solid fa-trash-can me-2"></i>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <input type="checkbox" class="form-check-input template_view_table_check">
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;width: 20%;">Potential Lead</td>
                                                   <td style="border-right: 1px solid #ccc;width: 10%;">Public</td>
                                                   <td style="border-right: 1px solid #ccc;width: 25%;">
                                                      <span class="creation_span">
                                                         <span>By : Gaurav Sharma</span>
                                                         <span>12/08/2025  16:04 GMT</span>
                                                      </span>
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;">
                                                      <div class="assigned_agents">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <div>20+</div>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="action-icons">
                                                         <div class="action-icons-edit">
                                                            <span class="material-icons-outlined" data-bs-toggle="modal" data-bs-target="#editContactsList"> edit
                                                            </span>
                                                            <span class="view-edit-txt">Edit</span>
                                                         </div>
                                                         <div class="action-icons-api">
                                                            <span class="view-api-txt">Delete</span>
                                                            <i class="fa-solid fa-trash-can me-2"></i>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <input type="checkbox" class="form-check-input template_view_table_check">
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;width: 20%;">Potential Lead</td>
                                                   <td style="border-right: 1px solid #ccc;width: 10%;">Public</td>
                                                   <td style="border-right: 1px solid #ccc;width: 25%;">
                                                      <span class="creation_span">
                                                         <span>By : Gaurav Sharma</span>
                                                         <span>12/08/2025  16:04 GMT</span>
                                                      </span>
                                                   </td>
                                                   <td style="border-right: 1px solid #ccc;">
                                                      <div class="assigned_agents">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                                         <div>20+</div>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="action-icons">
                                                         <div class="action-icons-edit">
                                                            <span class="material-icons-outlined" data-bs-toggle="modal" data-bs-target="#editContactsList"> edit
                                                            </span>
                                                            <span class="view-edit-txt">Edit</span>
                                                         </div>
                                                         <div class="action-icons-api">
                                                            <span class="view-api-txt">Delete</span>
                                                            <i class="fa-solid fa-trash-can me-2"></i>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Pagination -->
                                 <div class="d-flex justify-content-between align-items-center mt-4">
                                    <div class="d-flex align-items-center">
                                       <select class="form-select form-select-sm pagination-select" style="width: 70px;">
                                          <option>10</option>
                                          <option>20</option>
                                          <option>50</option>
                                       </select>
                                       <span class="me-2">Show on page</span>
                                    </div>
                                    <nav class="d-flex align-items-center pagination_number">
                                       <span>Page</span>
                                       <ul class="pagination pagination_number_ul pagination-sm mb-0">
                                          <li class="page-item ms-3">
                                             <a class="page-link" href="#"><i class="fa-solid fa-caret-left"></i></a>
                                          </li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">...</a></li>
                                          <li class="page-item active"><a class="page-link" href="#">6</a></li>
                                          <li class="page-item"><a class="page-link" href="#">...</a></li>
                                          <li class="page-item"><a class="page-link" href="#">10</a></li>
                                          <li class="page-item">
                                             <a class="page-link" href="#"><i class="fa-solid fa-caret-right"></i></a>
                                          </li>
                                       </ul>
                                    </nav>
                                 </div>
                              </div> 
                 </div>
                 <div class="developer_tools" id="developerTools" style="display: none;">
                   <h2 class="product-title mb-3">Developer Tools</h2>
                   <div class="developer-tools-box">
                     <p>We have detailed API documentation available on Postman to help you get started quickly with our integration. Access the documentation here:</p>
                     <a href="https://documenter.getpostman.com/view/40451098/2sAYJ1k2VV#1033a47c-e65c-43f8-a594-86af543ec091" target="_blank">🔗 API Documentation on Postman</a>
                     <p class="mt-3">Our API supports various functionalities, including:</p>
                     <ul class="mt-4 mb-4">
                        <li>📩 Sending and receiving messages</li>
                        <li>📍 Handling media files (images, videos, documents, and stickers)</li>
                        <li>🔔 Webhooks for real-time message updates</li>
                        <li>📊 Delivery and read status tracking</li>
                        <li>📢 Template message management</li>
                     </ul>
                     <p>We are excited to announce that our WhatsApp Business API integration for Shopify is now live! Easily connect WhatsApp with your Shopify store to send order updates, abandoned cartreminders, customer support messages, and more.</p>

                     <div class="developer-tools-inner-boxs mt-5 mb-4">
                        <div class="developer-tools-inner-boxs_item">
                          <span class="material-icons-outlined"> api </span>
                          <h5>APIs and Webhooks</h5>
                          <a href="https://documenter.getpostman.com/view/40451098/2sAYJ1k2VV#1033a47c-e65c-43f8-a594-86af543ec091" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a> 
                        </div>
                        <div class="developer-tools-inner-boxs_item">
                          <span class="material-icons-outlined"> api </span>
                          <h5>Integration</h5>
                          <a href="https://documenter.getpostman.com/view/40451098/2sAYJ1k2VV#1033a47c-e65c-43f8-a594-86af543ec091" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a> 
                        </div>
                     </div>
                   </div> 
                 </div>
                 <div class="plan_and_billings" id="planAndBillings" style="display: none;">
                   <div class="plan_and_billings_box">
                     <div class="plan_and_billings_box_top">
                       <h2 class="product-title">Plan and Billings</h2> 
                     </div> 
                     <div class="plan_and_billings_content">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="plan_billings_box">
                              <h5>Plan Details</h5>
                              <p>Change your plan based on your needs</p>
                              <div class="plan_billings_detiles_box mt-3">
                               <div class="price_expiry_date">
                                 <div class="plan_type_price">
                                 <span class="plan_type_span mb-2">Basic</span>
                                 <span class="plan_price_span">₹ 7,200 <span class="plan_currency_span">INR/Year</span></span> 
                               </div>
                               <div class="plan_expiry_date">
                                 <span>Renew On</span>
                                 <span>26 January 2026</span>
                                 <span>Unsubscribe</span>
                               </div> 
                               </div>
                               <div class="view_details_txt mt-3">
                                 <span>View Details</span> 
                               </div>  
                              </div>
                              <div class="plans_upgrade mt-3 mb-3">
                                <button  data-bs-toggle="modal" data-bs-target="#planUpgradeModal">Upgrade</button> 
                              </div>
                            </div> 
                          </div>
                          <div class="col-md-6">
                            <div class="plan_billings_box">
                              <h5>Payment Method</h5>
                              <p>Change your plan based on your needs</p>
                              <div class="plan_billings_detiles_box mt-3">
                                <div class="payment_method_box">
                                 <div class="payment_method_checkbox">
                                    <label class="radio-label">
                                   <input type="radio" name="payment-method-type" value="equal" onclick="paymentMethodRadio()">
                                   <span class="radio-custom-2"></span>
                                    </label>
                                    <div class="payment_method_ids">
                                      <span>Getgabs Llp</span>
                                      <span>****4897</span>
                                    </div>
                                 </div>
                                 <div class="payment_method_img">
                                    <img src="{{asset('betaversion/templatedesign/template_design/img/payment_method_1.png')}}">
                                 </div>  
                                </div>
                                <div class="payment_method_box mt-3 mb-2">
                                 <div class="payment_method_checkbox">
                                    <label class="radio-label">
                                   <input type="radio" name="payment-method-type" value="equal" onclick="paymentMethodRadio()">
                                   <span class="radio-custom-2"></span>
                                    </label>
                                    <div class="payment_method_ids">
                                      <span>Getgabs Llp</span>
                                      <span>businessname@ybl</span>
                                    </div>
                                 </div>
                                  <div class="payment_method_img">
                                    <img src="{{asset('betaversion/templatedesign/template_design/img/payment_method_2.png')}}">
                                 </div> 
                                </div> 
                              </div>
                              <div class="add_payment_method mt-3">
                                <span>+Add New Method</span> 
                              </div> 
                            </div> 
                          </div> 
                        </div>
                     </div>
                   </div> 
                   <div class="template_view_tables mt-4">
                     <!-- Tabs and Search -->
                     <div class="template_view_header d-flex justify-content-between align-items-center">
                        <div class="payment_history">
                           <h4><span class="material-symbols-outlined me-2"> refresh </span>Payment History</h4>
                        </div>
                        <div class="template_tables_search_container d-flex justify-content-between align-items-center">
                           <div class="search_container_icon_input">
                              <i class="bi bi-search"></i>
                              <input type="search" class="form-control search_container_input" placeholder="Search by Invoice Number">
                           </div>
                           <div class="dropdown_3 ms-2" id="manageTagsDropdown3_new">
                           <div class="dropdown-header" id="manageTagsDropdown_selected_new">
                              <span class="selected_items d-flex align-items-center" id="manageTagsSelectedItems_new">
                              <span class="material-icons me-2 user-manage-filter"> filter_list </span>Billing-Year 2025
                              </span>
                              <i class="fa-solid fa-angle-down"></i>
                           </div>
                           <ul class="dropdown-list manageTagsDropdown_newClass2" id="manageTagsDropdown_new" style="display: none;">
                              <div class="filter-label">Filter By</div>
                              <li class="dropdown-items manageTagsDropdown_items_new">
                                 <span class="status-text"><i class="fa-solid fa-bars me-2"></i>Department * Sales</span>
                              </li>
                              <li class="dropdown-items manageTagsDropdown_items_new">
                                 <span><i class="fa-solid fa-bars me-2"></i>Role * Manager</span>
                              </li>
                              <li class="dropdown-items manageTagsDropdown_items_new">
                                 <span><i class="fa-solid fa-bars me-2"></i>Department * Sales</span>
                              </li>
                           </ul>
                        </div>
                        </div>
                     </div>
                     <!-- Table -->
                     <div class="all_contacts_list_table">
                        <div class="table-responsive">
                           <table class="table table-hover align-middle">
                              <thead class="table-light template_view_tables_thead">
                                 <tr>
                                    <th style="width: 4%;">
                                             <span class="view_tables_namber_span">1</span>
                                          </th>
                                    <th>Invoice</th>
                                    <th>Status</th>
                                    <th>Billing Date</th>
                                    <th>Amount</th>
                                    <th style="text-align: center;">Action</th>
                                 </tr>
                              </thead>
                              <tbody class="template_view_tables_tbody">
                                 <tr>
                                    <td style="width: 4%;">
                                             <input type="checkbox" class="form-check-input template_view_table_check">
                                          </td>
                                    <td><i class="fa-solid fa-file-lines fs-4 me-3"></i>Invoice #1230-0225</td>
                                    <td><span class="payment_paid_span"><i class="fa-regular fa-circle-check me-2"></i>Paid</span></td>
                                    <td>12/08/2025  16:04 GMT</td>
                                    <td>$ 12.00 <span class="plan_currency_span">USD</span></td>
                                    <td>
                                       <div class="action-icons">
                                          <div class="action-icons-api">
                                             <span class="view-api-txt">Download</span>
                                             <span class="material-symbols-outlined"> download </span>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="width: 4%;">
                                             <input type="checkbox" class="form-check-input template_view_table_check">
                                          </td>
                                    <td><i class="fa-solid fa-file-lines fs-4 me-3"></i>Invoice #1230-0225</td>
                                    <td><span class="payment_pending_span"><i class="fa-regular fa-clock me-2"></i>Pending</span></td>
                                    <td>12/08/2025  16:04 GMT</td>
                                    <td>$ 12.00 <span class="plan_currency_span">USD</span></td>
                                    <td>
                                       <div class="action-icons">
                                          <div class="action-icons-api">
                                             <span class="view-api-txt">Download</span>
                                             <span class="material-symbols-outlined"> download </span>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="width: 4%;">
                                             <input type="checkbox" class="form-check-input template_view_table_check">
                                          </td>
                                    <td><i class="fa-solid fa-file-lines fs-4 me-3"></i>Invoice #1230-0225</td>
                                    <td><span class="payment_failed_span"><i class="bi bi-info-circle me-2"></i>Failed</span></td>
                                    <td>12/08/2025  16:04 GMT</td>
                                    <td>$ 12.00 <span class="plan_currency_span">USD</span></td>
                                    <td>
                                       <div class="action-icons">
                                          <div class="action-icons-api">
                                             <span class="view-api-txt">Download</span>
                                             <span class="material-symbols-outlined"> download </span>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="width: 4%;">
                                             <input type="checkbox" class="form-check-input template_view_table_check">
                                          </td>
                                    <td><i class="fa-solid fa-file-lines fs-4 me-3"></i>Invoice #1230-0225</td>
                                    <td><span class="payment_paid_span"><i class="fa-regular fa-circle-check me-2"></i>Paid</span></td>
                                    <td>12/08/2025  16:04 GMT</td>
                                    <td>$ 12.00 <span class="plan_currency_span">USD</span></td>
                                    <td>
                                       <div class="action-icons">
                                          <div class="action-icons-api">
                                             <span class="view-api-txt">Download</span>
                                             <span class="material-symbols-outlined"> download </span>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="width: 4%;">
                                             <input type="checkbox" class="form-check-input template_view_table_check">
                                          </td>
                                    <td><i class="fa-solid fa-file-lines fs-4 me-3"></i>Invoice #1230-0225</td>
                                    <td><span class="payment_pending_span"><i class="fa-regular fa-clock me-2"></i>Pending</span></td>
                                    <td>12/08/2025  16:04 GMT</td>
                                    <td>$ 12.00 <span class="plan_currency_span">USD</span></td>
                                    <td>
                                       <div class="action-icons">
                                          <div class="action-icons-api">
                                             <span class="view-api-txt">Download</span>
                                             <span class="material-symbols-outlined"> download </span>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="width: 4%;">
                                             <input type="checkbox" class="form-check-input template_view_table_check">
                                          </td>
                                    <td><i class="fa-solid fa-file-lines fs-4 me-3"></i>Invoice #1230-0225</td>
                                    <td><span class="payment_failed_span"><i class="bi bi-info-circle me-2"></i>Failed</span></td>
                                    <td>12/08/2025  16:04 GMT</td>
                                    <td>$ 12.00 <span class="plan_currency_span">USD</span></td>
                                    <td>
                                       <div class="action-icons">
                                          <div class="action-icons-api">
                                             <span class="view-api-txt">Download</span>
                                             <span class="material-symbols-outlined"> download </span>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="width: 4%;">
                                             <input type="checkbox" class="form-check-input template_view_table_check">
                                          </td>
                                    <td><i class="fa-solid fa-file-lines fs-4 me-3"></i>Invoice #1230-0225</td>
                                    <td><span class="payment_paid_span"><i class="fa-regular fa-circle-check me-2"></i>Paid</span></td>
                                    <td>12/08/2025  16:04 GMT</td>
                                    <td>$ 12.00 <span class="plan_currency_span">USD</span></td>
                                    <td>
                                       <div class="action-icons">
                                          <div class="action-icons-api">
                                             <span class="view-api-txt">Download</span>
                                             <span class="material-symbols-outlined"> download </span>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="width: 4%;">
                                             <input type="checkbox" class="form-check-input template_view_table_check">
                                          </td>
                                    <td><i class="fa-solid fa-file-lines fs-4 me-3"></i>Invoice #1230-0225</td>
                                    <td><span class="payment_pending_span"><i class="fa-regular fa-clock me-2"></i>Pending</span></td>
                                    <td>12/08/2025  16:04 GMT</td>
                                    <td>$ 12.00 <span class="plan_currency_span">USD</span></td>
                                    <td>
                                       <div class="action-icons">
                                          <div class="action-icons-api">
                                             <span class="view-api-txt">Download</span>
                                             <span class="material-symbols-outlined"> download </span>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="width: 4%;">
                                             <input type="checkbox" class="form-check-input template_view_table_check">
                                          </td>
                                    <td><i class="fa-solid fa-file-lines fs-4 me-3"></i>Invoice #1230-0225</td>
                                    <td><span class="payment_failed_span"><i class="bi bi-info-circle me-2"></i>Failed</span></td>
                                    <td>12/08/2025  16:04 GMT</td>
                                    <td>$ 12.00 <span class="plan_currency_span">USD</span></td>
                                    <td>
                                       <div class="action-icons">
                                          <div class="action-icons-api">
                                             <span class="view-api-txt">Download</span>
                                             <span class="material-symbols-outlined"> download </span>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <!-- Add more rows as needed -->
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                 </div>
                 <div class="manual_onbording" id="manualOnbording" style="display: none;">
                   <h6>Manual Onbording</h6> 
                 </div>
                 <div class="whatsApp_profile" id="whatsAppProfile" style="display: none;">
                  <div class="container-fluid">
                    <div class="row">
                       <div class="col-xl-9 col-lg-8 col-md-8">
                         <div class="whatsApp-business-profile">
                           <div class="whatsApp-business-profile-top">
                              <h4>Update WhatsApp Business Profile</h4>
                              <button id="updateBusinessProfileBtn"><span class="material-symbols-outlined"> refresh </span> Update</button>
                           </div>
                           <div class="whatsApp-business-profile-body">
                             <div class="whatsApp-business-logo-txt">
                                <div class="whatsApp-business-logo-size">
                                  <h4 class="whatsApp-business-h4">Business logo</h4>
                                  <p class="mb-0 whatsApp-business-p">Use a square image with a recommended size of 500x500 pixels (minimum 192x192 pixels) and a file size not exceeding 5MB.</p> 
                                </div>
                                <div class="whatsApp-business-logo">
                                  <img id="whatsAppBusinessLogo" src="{{asset('betaversion/templatedesign/template_design/img/business-logo.png')}}"> 
                                </div>
                                <div class="business-logo-upload-area">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <p>Choose a file</p>
                                    <span class="file-types">JPEG, PNG</span>
                                </div>
                             </div>
                             <div class="about-whatsApp-business">
                              <h4 class="whatsApp-business-h4">About Business</h4>
                                  <p class="mb-0 whatsApp-business-p">Provide your business category and a short bio (up to 20 words) that clearly describe your services, products, or mission.</p> 
                                  <div class="business-category-select-textarea mt-4">
                                     <div class="whatsApp-business-category-dropdown me-4">
                                    <label class="whatsApp-business-label mb-2">Business Category</label>
                                     <div class="whatsApp-business-category-selected" id="whatsAppBusinessCategorySelected">Proffessional Service</div>
                                     <ul class="whatsAppbusinesscategorydropdown-list">
                                       <li data-value="tag1">Professional Service</li>
                                       <li data-value="tag2">Retail</li>
                                       <li data-value="tag3">Food & Beverage</li>
                                       <li data-value="tag4">Health & Beauty</li>
                                       <li data-value="tag5">Education</li>
                                     </ul>
                                   </div>
                                   <div class="business-category-textarea">
                                    <label class="whatsApp-business-label mb-2">About</label>
                                      <textarea class="whatsApp-business-textarea" placeholder="Hey there! I am using Whatsapp." id="BusinessAboutText">Hey there! I am using Whatsapp.</textarea>
                                      <span class="material-symbols-outlined business-textarea-emoji" id="aboutEmoji"> sentiment_satisfied </span>
                                   </div>
                                  </div>
                             </div>
                             <div class="business-more-details">
                               <h4 class="whatsApp-business-h4">More Details</h4>
                                  <p class="mb-0 whatsApp-business-p">Add your business description, address, email, and website to your WhatsApp Business profile for better visibility and customer engagement.</p>
                                  <div class="business-category-textarea mt-3">
                                    <label class="whatsApp-business-label mb-2">Description</label>
                                      <textarea class="whatsApp-business-textarea" placeholder="Hey there! I am using Whatsapp." id="BusinessDescriptionText">Welcome to [Your Business Name]! 🚀 We specialize in [your services/products] with a commitment to quality and customer satisfaction</textarea>
                                      <span class="material-symbols-outlined business-textarea-emoji" id="descriptionEmoji"> sentiment_satisfied </span>
                                   </div>
                                   <div class="business-category-textarea mt-3">
                                    <label class="whatsApp-business-label mb-2">Address</label>
                                      <textarea class="whatsApp-business-textarea" placeholder="Hey there! I am using Whatsapp." id="BusinessAddressText">1234 Market Street, Suite 567, New Delhi, India – 110001</textarea>
                                      <span class="material-symbols-outlined business-textarea-emoji" id="addressEmoji"> sentiment_satisfied </span>
                                   </div>
                                   <div class="row">
                                    <div class="col-6 mt-3">
                                     <label for="username" class="form-label template_labls">Email</label>
                                      <input type="text" maxlength="60" class="form-control template-input" value="" placeholder="info@getgabs.com" required="" id="BusinessProfileEmail">
                                      </div>
                                      <div class="col-6 mt-3">
                                     <label for="username" class="form-label template_labls">Website</label>
                                      <input type="text" maxlength="60" class="form-control template-input" value="" placeholder="getgabs.com" required="" id="BusinessProfileWebsite">
                                      </div>    
                                   </div>
                             </div> 
                           </div> 
                         </div> 
                       </div>
                       <div class="col-xl-3 col-lg-4 col-md-4">
                         <div class="whatsApp-profile-appearance">
                          <div class="whatsApp-profile-appearance-top">
                            <h4>WhatsApp Profile Appearance</h4> 
                          </div>
                          <div class="business-updated-profile text-center">
                            <div class="whatsApp-business-logo">
                                  <img src="{{asset('betaversion/templatedesign/template_design/img/business-logo.png')}}" id="updatedProfileImg"> 
                                </div>
                                <h4 class="mt-3">GetGabs Llp</h4>
                                <p id="updatedProfileCategory">Professional Service</p> 
                          </div>
                          <div class="business-updated-about mt-3 me-3 ms-3">
                            <span>About </span>
                            <p class="mt-2" id="updatedBusinessAboutText">Hey there! I am using Whatsapp.</p> 
                          </div>
                          <div class="description-updated-about mt-3 me-3 ms-3">
                            <p id="updatedBusinessDescriptionText">Welcome to [Your Business Name]! 🚀 We specialize in [your services/products] with a commitment to quality and customer satisfaction. <span class="description-see-more">See More</span></p>
                            <p id="updatedBusinessAddressText">1234 Market Street, Suite 567, New Delhi, India – 110001</p>
                            <span class="description-updated-about-span" id="updatedBusinessProfileEmail">Info@getgabs.com</span>
                            <span class="description-updated-about-span" id="updatedBusinessProfileWebsite">Getgabs.com</span> 
                          </div>  
                         </div>
                       </div>
                    </div> 
                  </div>
                 </div>
               </div>
            </div>
            <div class="manage-individual-user" id="ManageIndividualUser" style="display: none;">
               <div class="manage-individual-user_top">
                 <div class="hedader-create-flow-btn -mb-4">
                     <h2 class="product-title">User Manage<span>&gt; Manage Individual User</span></h2>
                     <button class="btn btn-info" id="gobacktouserlist">Back</button>
                     <button class="updateIndividualUserBtn" id="updateIndividualUser"><span class="material-symbols-outlined"> refresh </span> Update</button>
                  </div> 
               </div>
               <div class="manage-individual-user-body">
                  <div class="setting_profile_box" id="setUserDetailsHere">
                       <div class="setting_profile_box_header">
                        <div class="user_profile_status">
                         <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}">
                         <div class="user_name_status">
                           <span>Divya Rastogi</span>
                           <span class="user_status_text"><span class="status_cricle"></span>Online</span> 
                         </div> 
                        </div>
                        <div class="toggle-container">
                              <label class="toggle">
                                <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                  <span class="slider"></span>
                                    <span class="toggle_close">x</span>
                                      <span class="toggle_check">✓</span>
                                        </label>
                                     <span class="toggle-label user-manage-toggleLabel" style="color: #69B666;">Active</span>
                                     </div>  
                       </div>
                       <div class="user_profile_information">
                         <div class="user_profile_information_items">
                           <span>Email</span>
                           <span>Divyarastogi@gmail.com</span> 
                         </div>
                         <div class="user_profile_info "></div>
                         <div class="user_profile_information_items">
                           <span>Phone</span>
                           <span>+917463823892</span> 
                         </div>
                         <div class="user_profile_info "></div>
                         <div class="user_profile_information_items">
                           <span>User Type</span>
                           <span>Executive</span> 
                         </div>
                         <div class="user_profile_info "></div>
                         <div class="user_profile_information_items">
                           <span>Designation</span>
                           <span>Sales Executive</span> 
                         </div> 
                       </div> 
                     </div>
                     <div class="manage-individual-user-tagbox mt-3">
                       <div class="manage-individual-user-tagbox-header">
                         <div class="manage-individual-user-tagbox-header-items">
                         <span class="material-icons-outlined me-3"> local_offer </span>
                         <span>Assigned Tags</span> 
                        </div>
                        <div class="manage-individual-user-tagbox-header-items">
                         <div class="assigned-tags-dropdown me-4">
                            <div class="assigned-tags-selected">Select Tags</div>
                            <ul class="assignedtagsdropdown-list">
                                <?php 
                                $colorCodeArr = ["tag-purple","tag-blue","tag-green","tag-red"];
                                ?>
                               @foreach($CustomerTag as $CustomerTags) 
                              <li data-value="usertagrelationship-{{$CustomerTags->id}}"><i class="bi bi-circle-fill me-2 {{$colorCodeArr[rand(0,3)]}}"></i>{{$CustomerTags->tag_name}}</li>
                              @endforeach
                            </ul>
                          </div>
                         <button id="assignedTagsBtn">Add</button> 
                        </div> 
                       </div>
                       <div class="manage-individual-user-tagbox-body" id="manageIndividualUserTagboxBody">
                       </div> 
                     </div>
                     <div class="manage-individual-user-tagbox mt-3">
                       <div class="manage-individual-user-tagbox-header">
                         <div class="manage-individual-user-tagbox-header-items">
                         <span class="material-symbols-outlined me-3"> flowchart </span>
                         <span>Assigned Routing Rule</span> 
                        </div>
                        <div class="manage-individual-user-tagbox-header-items">
                         <div class="routingrule-tags-dropdown me-4">
                            <div class="routingrule-tags-selected">Select Routing Rule</div>
                            <ul class="routingruletagsdropdown-list">
                            @foreach($RoutingRule as $RoutingRules)    
                              <li data-value="routingrulerelationship-{{$RoutingRules->id}}">{{$RoutingRules->route_name}}</li>
                            @endforeach
                            </ul>
                          </div>
                         <button id="routingruleTagsBtn">Add</button> 
                        </div> 
                       </div>
                       <div class="manage-individual-user-tagbox-body" id="manageIndividualUserTagboxBody2">
                       </div> 
                     </div>
                     <div class="individual-user-manage-permissions mt-3">
                       <div class="individual-user-manage-permissions-top">
                         <h4><span class="material-symbols-outlined me-2 passkey_icon"> passkey </span>Manage Permissions</h4> 
                       </div> 
                       <div class="individual-user-manage-permissions-body">
                          <div class="accordion accessabilityview dshjwdnbq432bsdwygq" id="sidebarAccordion">
                <!-- Dashboard -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingDashboard">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDashboard" aria-expanded="false" aria-controls="collapseDashboard">
                            <span class="material-icons me-2">dashboard</span>
                            Dashboard
                        </button>
                    </h2>
                    <div id="collapseDashboard" class="accordion-collapse collapse" aria-labelledby="headingDashboard" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Dashboard Visible To User</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right csthree">
                               <span class="accordion-body-items-right-span firstinput">With Limited Access <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">With Full Access <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- Chats / Team inbox -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingChats">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChats" aria-expanded="false" aria-controls="collapseChats">
                            <span class="material-icons-outlined me-2">
                                 forum
                                 </span>
                            Chats / Team inbox
                        </button>
                    </h2>
                    <div id="collapseChats" class="accordion-collapse collapse" aria-labelledby="headingChats" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Chats</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right csthree">
                               <span class="accordion-body-items-right-span firstinput">Assigned to User <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">All Chats <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <h4 class="accordion-body_h4 mt-3">Chat Tools</h4>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create Shortcut</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create QR Code</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create Chat Widget</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- Automation -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAutomation">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAutomation" aria-expanded="false" aria-controls="collapseAutomation">
                            <i class="fa-solid fa-robot me-2 fs-4"></i>
                            Automation
                        </button>
                    </h2>
                    <div id="collapseAutomation" class="accordion-collapse collapse" aria-labelledby="headingAutomation" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Auto Reply</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Chat Flow Builder</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Chat Routing Rule</span>
                               <span class="accordion-body-items_nots">*Only for Admin Recommended</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- Templates -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTemplates">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTemplates" aria-expanded="false" aria-controls="collapseTemplates">
                            <i class="fa-solid fa-table me-2 fs-4"></i>
                            Templates
                        </button>
                    </h2>
                    <div id="collapseTemplates" class="accordion-collapse collapse" aria-labelledby="headingTemplates" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Template List</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create Templates</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Template Library</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Whatsapp Flow</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- Campign Manage -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAnalytics">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAnalytics" aria-expanded="false" aria-controls="collapseAnalytics">
                            <span class="material-icons-outlined me-2">
                                 bar_chart
                                 </span>
                            Campaign Manage
                        </button>
                    </h2>
                    <div id="collapseAnalytics" class="accordion-collapse collapse" aria-labelledby="headingAnalytics" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Whatsapp Book</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Create Campaign</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Retarget Campaign</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Campaign Lists</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- Settings -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSettings">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                            <span class="material-icons-outlined me-2">
                                 settings
                                 </span>
                            Settings
                        </button>
                    </h2>
                    <div id="collapseSettings" class="accordion-collapse collapse" aria-labelledby="headingSettings" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Whatsapp Business Profile</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Rest Api</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                
                <!-- UserManage -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAccess">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccess" aria-expanded="false" aria-controls="collapseAccess">
                            <span class="material-symbols-outlined me-2"> passkey </span>
                            User Manage
                        </button>
                    </h2>
                    <div id="collapseAccess" class="accordion-collapse collapse" aria-labelledby="headingAccess" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body">
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>User Manage</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>
                           <div class="accordion-body-item">
                             <div class="accordion-body-items">
                               <span>Customer Manage</span> 
                             </div> 
                             <div class="accordion-body-items accordion-body-items-right">
                               <span class="accordion-body-items-right-span firstinput">View <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span>
                                                       <span class="accordion-body-items-right-span secondinput">Edit <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch" checked="">
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label></span> 
                             </div>
                           </div>

                        </div>
                    </div>
                </div>
            </div>
                       </div>
                     </div>
               </div>
               </div> 
         </div>
      </div>   
      
      
      
      
      
      
      
<!-- modal code started -->

    <div class="modal fade" id="templateDeleteModal" tabindex="-1" aria-labelledby="flowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content border-0">
                <div class="modal-header existing-flow-header" style="background-color: #10654B;padding: 20px;">
                  <h5 class="modal-title" style="color: #fff;">Are you sure you want to permanently delete these items?</h5>
                </div>
                <div class="modal-body">
                    <div class="templateDeleteModalContant">
                      <button class="delete_no">No</button>
                      <button class="delete_yes ms-2">Yes</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createTagModal" tabindex="-1" aria-labelledby="flowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header existing-flow-header">
                    <h5 class="modal-title" id="flowModalLabel">Create New Tag</h5>
                    <button class="existing-flow-close" type="button" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <!-- <button  class="btn-close" >Close</button> -->
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                     <div class="col-12">
                         <label for="username" class="form-label template_labls">Tag Name</label>
                          <input type="text" name="Tag Name" maxlength="60" class="form-control template-input" value="" placeholder="Enter Tag Name" required="">
                          </div> 
                          <div class="col-12 mt-3 select-container_3">
                              <label for="header" class="form-label template_labls">Want to add this under a tag ? </label>
                              <select class="form-control template-input" id="headerSelect" name="header" required="">
                                 <option>Select Parent Tag</option>
                                 <option>Text</option>
                                 <option>Image</option>
                                 <option>Video</option>
                                 <option>Document</option>
                              </select>
                           </div>
                           <div class="col-12 mt-3">
                               <label for="body" class="form-label template_labls">Tag Discription<i class="bi bi-info-circle ms-2"></i></label>
                                <textarea rows="4" cols="50" class="form-control template-input" name="Discription" placeholder="Enter Discription" required=""></textarea>
                          </div>
                          <div class="tags_see_type mt-3">
                           <label class="form-label template_labls mb-0">Who can see this tag ?</label>
                            <label class="radio-label">
                                   <input type="radio" name="filter-type" value="Public">
                                   <span class="radio-custom-2"></span>
                                   <div class="radio_text_distribution">
                                      <span class="radio-text">Public</span>
                                       <span class="radio_distribution">This tag can be seen by all users.</span>
                                   </div>

                               </label>
                               <label class="radio-label mt-3">
                                   <input type="radio" name="filter-type" value="Private">
                                   <span class="radio-custom-2"></span>
                                   <div class="radio_text_distribution">
                                      <span class="radio-text">Private</span>
                                       <span class="radio_distribution">This tag can be seen by all users.</span>
                                   </div>
                               </label>
                               <label class="radio-label mt-3">
                                   <input type="radio" name="filter-type" value="admin">
                                   <span class="radio-custom-2"></span>
                                   <div class="radio_text_distribution">
                                      <span class="radio-text">Only admin</span>
                                       <span class="radio_distribution">This tag can be seen by all users.</span>
                                   </div>
                               </label> 
                          </div>
                          <div class="tag_chat_distribution mt-4">
                             <label class="form-label template_labls">Want to use this tag  in Chat- Distribution ?</label>
                            <div class="chat_distribution_options">
                               <label class="radio-label">
                                   <input type="radio" name="filter-type" value="Public">
                                   <span class="radio-custom-2" id="chatDistributionNo"></span>
                                   <span class="radio-text">NO</span>
                               </label>
                               <label class="radio-label">
                                   <input type="radio" name="filter-type" value="Private">
                                   <span class="radio-custom-2" id="chatDistributionYes"></span>
                                   <span class="radio-text">Yes</span>
                               </label>
                            </div>
                          </div> 
                    </div>
                    <div class="col-md-6">
                     <div class="create_tag_assignto">
                        <div class="create_tag_assignto_top">
                          <div class="search_container_icon_input" id="selectAgentsSearchbar">
                                       <i class="bi bi-search me-3"></i>
                                      <input type="search" class="form-control search_container_input" placeholder="Search  User" id="">
                                    </div> 
                        </div>
                       
                     <div class="all_registered_agents">
                                   <div class="all_registered_agents_items mt-3">
                                      <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                      <div class="registered_agents_name">
                                         <span>Divya Rastogi</span>
                                         <span>Id : divyarastogi@gmail.com</span>
                                      </div>
                                   </div>
                                   <div class="all_registered_agents_items mt-3">
                                      <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                      <div class="registered_agents_name">
                                         <span>Divya Rastogi</span>
                                         <span>Id : divyarastogi@gmail.com</span>
                                      </div>
                                   </div>
                                   <div class="all_registered_agents_items mt-3">
                                      <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                      <div class="registered_agents_name">
                                         <span>Divya Rastogi</span>
                                         <span>Id : divyarastogi@gmail.com</span>
                                      </div>
                                   </div>
                                   <div class="all_registered_agents_items mt-3">
                                      <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                      <div class="registered_agents_name">
                                         <span>Divya Rastogi</span>
                                         <span>Id : divyarastogi@gmail.com</span>
                                      </div>
                                   </div>
                                   <div class="all_registered_agents_items mt-3">
                                      <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                      <div class="registered_agents_name">
                                         <span>Divya Rastogi</span>
                                         <span>Id : divyarastogi@gmail.com</span>
                                      </div>
                                   </div>
                                   <div class="all_registered_agents_items mt-3">
                                      <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                      <div class="registered_agents_name">
                                         <span>Divya Rastogi</span>
                                         <span>Id : divyarastogi@gmail.com</span>
                                      </div>
                                   </div>
                                   <div class="all_registered_agents_items mt-3">
                                      <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                      <div class="registered_agents_name">
                                         <span>Divya Rastogi</span>
                                         <span>Id : divyarastogi@gmail.com</span>
                                      </div>
                                   </div>
                                   <div class="all_registered_agents_items mt-3">
                                      <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                      <div class="registered_agents_name">
                                         <span>Divya Rastogi</span>
                                         <span>Id : divyarastogi@gmail.com</span>
                                      </div>
                                   </div>
                                   <div class="all_registered_agents_items mt-3">
                                      <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                      <div class="registered_agents_name">
                                         <span>Divya Rastogi</span>
                                         <span>Id : divyarastogi@gmail.com</span>
                                      </div>
                                   </div>
                                   <div class="all_registered_agents_items mt-3">
                                      <img src="{{asset('betaversion/templatedesign/template_design/img/user_img.png')}}">
                                      <div class="registered_agents_name">
                                         <span>Divya Rastogi</span>
                                         <span>Id : divyarastogi@gmail.com</span>
                                      </div>
                                   </div>
                                </div>  
                     </div> 
                    </div> 
                    <div class="incoming_chats_add_tags mt-3" id="incomingChatsAddTags" style="display: none;">
                     <h5>Setup Tag  Assignmet rule for incoming chats</h5>
                      <div class="incoming_chats_add_tags_box mt-3">
                        <div class="incoming_chats_add_tags_box_top">
                            <span>If Incoming Chat</span>
                             <select class="form-select" aria-label="Default select example">
                                 <option selected="">Contains</option>
                                 <option value="1">Contains</option>
                                 <option value="2">Contains</option>
                                 <option value="3">Contains</option>
                             </select>
                             <span>Keyword</span>
                             <div class="tag_rule_add_keyword">
                                <input type="text" name="Enter Keyword" placeholder="Write Keyword">
                                <button class="ms-3">Add</button>
                            </div>
                        </div>
                         <div class="edit_Contacts_Tags mt-3">
                             <span class="edit_Contacts_Tags_items">
                                 <i class="fa-solid fa-xmark me-1"></i> Price
                             </span>
                             <span class="edit_Contacts_Tags_items">
                                 <i class="fa-solid fa-xmark me-1"></i> cost
                             </span>
                             <span class="edit_Contacts_Tags_items">
                                 <i class="fa-solid fa-xmark me-1"></i> quote
                             </span>
                         </div>
                      </div> 
                    </div> 

                  </div>
                </div>
                <div class="modal-footer custom-modal-footer mt-3">
                    <button class="create-flow-btn">
                     Create Tag
                     </button>
                </div>
            </div>
        </div>
    </div>



     <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="flowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header existing-flow-header">
                    <h5 class="modal-title">Add New User</h5>
                    <button class="existing-flow-close" type="button" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <!-- <button  class="btn-close" >Close</button> -->
                </div>
                <div class="modal-body">
                  <div class="row">
                     <div class="col-12">
                         <label for="username" class="form-label template_labls">Full Name <span style="color: red;">*</span></label>
                          <input type="text" name="Tag Name" maxlength="60" class="form-control template-input" value="" placeholder="Enter Tag Name" required="">
                          </div> 
                          <div class="col-6 mt-3">
                                   <label for="username" class="form-label template_labls">Contact Number <span style="color: red;">*</span></label>
                                         <div class="profile_update_contact_number">
                                            <select class="form-select template-input" aria-label="Default select example" id="profileUpdateContactSelect">
                                               <option selected="">US  +1</option>
                                               <option value="1">US  +91</option>
                                               <option value="2">US  +2</option>
                                               <option value="3">US  +3</option>
                                             </select>
                                          <div class="profile_update_name">
                                          <input type="text" name="templatename" maxlength="60" class="form-control template-input" id="profileUpdateContactNumber" required="" placeholder="9222568145">
                                       </div>
                                         </div>
                           </div>
                           <div class="col-6 mt-3 select-container_3">
                              <label for="header" class="form-label template_labls">User Type <span style="color: red;">*</span></label>
                              <select class="form-control template-input" id="headerSelect" name="header" required="">
                                 <option>Executive</option>
                                 <option>Executive</option>
                                 <option>Executive</option>
                                 <option>Executive</option>
                                 <option>Executive</option>
                              </select>
                           </div>
                           <div class="col-12 mt-3">
                              <label for="username" class="form-label template_labls">Email <span style="color: red;">*</span></label>
                                          <input type="text" name="templatename" maxlength="60" class="form-control template-input" placeholder="e.g. info@getgabs.com" required=""> 
                           </div>
                           <div class="col-12 mt-3">
                              <label for="username" class="form-label template_labls d-flex">Designation (optional) <div class="info-circle">
                                                <i class="bi bi-info-circle ms-2"></i>
                                                <span>It helps filter users by designation (e.g., Sales, Support) to organize teams and automate tag assignment in Automate chat distribution.</span>
                                             </div></label>
                                          <input type="text" name="templatename" maxlength="60" class="form-control template-input" placeholder="e.g. Sales Executive, Support Executive e.t.c." required=""> 
                           </div>
                           <div class="addUserModal_description mt-4">
                              <p>*You can use <span class="material-symbols-outlined"> settings </span> (Manage Button) in the user list to add More details like Tag and Permission.  </p>
                           </div>
                  </div>
                </div>
                <div class="modal-footer custom-modal-footer mt-3">
                    <button class="create-flow-btn">
                     Add User
                     </button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="planUpgradeModal" tabindex="-1" aria-labelledby="planUpgradeModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content border-0">
                <div class="modal-header existing-flow-header">
                    <h5 class="modal-title">Choose A Plan That Fitst </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="billing-toggle">
                <div class="toggle-option active" data-billing="yearly">Bill Yearly (Save upto 20%)</div>
                <div class="toggle-option" data-billing="monthly">Bill Monthly</div>
            </div>
            <div class="pricing-plans">
                <div class="plan">
                    <h3>Free Forever</h3>
                    <div class="price">
                        <span class="currency">$</span>
                        <span class="amount">0</span>
                        <span class="currency">USD</span>
                        <span class="period">/ <span class="billing-period">Yearly</span></span>
                    </div>
                    <button class="select-button">Select</button>
                </div>
                
                <div class="plan featured">
                    <h3>Basic</h3>
                    <div class="price">
                        <span class="currency">$</span>
                        <span class="amount" data-yearly="85" data-monthly="8">85</span>
                        <span class="currency">USD</span>
                        <span class="period">/ <span class="billing-period">Yearly</span></span>
                    </div>
                    <button class="select-button">Select</button>
                </div>
                
                <div class="plan">
                    <h3>Pro</h3>
                    <div class="price">
                        <span class="currency">$</span>
                        <span class="amount" data-yearly="465" data-monthly="45">465</span>
                        <span class="currency">USD</span>
                        <span class="period">/ <span class="billing-period">Yearly</span></span>
                    </div>
                    <button class="select-button">Select</button>
                </div>
            </div>
            <div class="features-section">
                <h3>Compare Features By Category</h3>
                
                <div class="category-tabs">
                    <div class="tab active" style="border-right: 1px solid #D0D4E1;" data-category="broadcast">Broadcast</div>
                    <div class="tab" style="border-right: 1px solid #D0D4E1;" data-category="team-inbox">Team Inbox</div>
                    <div class="tab" style="border-right: 1px solid #D0D4E1;" data-category="automation">Automation</div>
                    <div class="tab" style="border-right: 1px solid #D0D4E1;" data-category="templates">Templates</div>
                    <div class="tab" style="border-right: 1px solid #D0D4E1;" data-category="analytics">Analytics & Reports</div>
                    <div class="tab" style="border-right: 1px solid #D0D4E1;" data-category="account">Account Management</div>
                    <div class="tab" data-category="supports">Supports</div>
                </div>
                
                <div class="features-table">
                    <div class="table-header">
                        <div class="column features-column">Features</div>
                        <div class="column">Free Forever</div>
                        <div class="column">Basic</div>
                        <div class="column">Pro</div>
                    </div>
                    
                    <!-- Broadcast Features -->
                    <div class="feature-category active" data-category="broadcast">
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Add Contacts</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                        
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Launch Campaign</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Add Contacts</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                        
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Launch Campaign</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                    </div>
                    
                    <!-- Team Inbox Features -->
                    <div class="feature-category" data-category="team-inbox">
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Shared Inbox</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                        
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Team Assignments</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                    </div>
                    
                    <!-- Automation Features -->
                    <div class="feature-category" data-category="automation">
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Basic Workflows</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                        
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Advanced Automation</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                    </div>
                    
                    <!-- Templates Features -->
                    <div class="feature-category" data-category="templates">
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Basic Templates</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                        
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Custom Templates</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                    </div>
                    
                    <!-- Analytics Features -->
                    <div class="feature-category" data-category="analytics">
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Basic Reports</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                        
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Advanced Analytics</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                    </div>
                    
                    <!-- Account Management Features -->
                    <div class="feature-category" data-category="account">
                        <div class="table-row">
                            <div class="column features-column">
                                <span>User Management</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                        
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Role-based Access</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                    </div>
                    
                    <!-- Support Features -->
                    <div class="feature-category" data-category="supports">
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Email Support</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                        
                        <div class="table-row">
                            <div class="column features-column">
                                <span>Priority Support</span>
                                <i class="bi bi-info-circle ms-2"></i>
                            </div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> cancel </span></div>
                            <div class="column"><span class="material-symbols-outlined"> check_circle </span></div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>

 <!-- modal code ended -->
      
    
    
      <script>
      
let manageTagsDropdown_newClass = document.querySelector(".manageTagsDropdown_newClass");
    
manageTagsDropdown_newClass.addEventListener("click",async (evt)=>{
    var targettagName =  evt.target.tagName.toLowerCase();
    if(targettagName=='li'){
        var targetedElement = evt.target.querySelector("span");
    }
    else if(targettagName=='div'){
        return;
    }    
    else if(targettagName=='span'){
        var targetedElement = evt.target;
    }
    else {
        var targetedElement = evt.target.closest("li").querySelector("span");
    }    
    await addClassFun(manageTagsDropdown_newClass,targetedElement);
    await fetchUserList(1); 
});  

document.querySelector(".user_active_status.userDetails").addEventListener("click",async (evt)=>{
 await fetchUserList(1); 
});  

async function addClassFun(manageTagsDropdown_newClass,elementt){
return new Promise((resolve)=>{
    manageTagsDropdown_newClass.querySelectorAll("span").forEach((elemmnt)=>{
        elemmnt.classList.remove('active');
    });
   elementt.classList.add('active'); 
   resolve();
});    
}
async function actionOnClick2(thiss){
const url = thiss.getAttribute("data-value");
const params = new URL(url).searchParams;
const page = params.get("page");

var paginationcallforid = thiss.closest(".d-flex.align-items-center.pagination_number").parentElement.id;

if(paginationcallforid=='customerlistpaginationlinkview'){
    var pageValue = page;
    var ajaxUrl = "{{route('betav1.settings.customer.backend.chat.showCustomerList')}}?page="+pageValue;
    await listCustomers(ajaxUrl);
}

if(paginationcallforid=='userlistpagination'){
    await fetchUserList(page);
}


}   
function generatePaginationLinks(paginationData) {
    const currentPage2 = paginationData.current_page;
    const lastPage2 = paginationData.last_page;
    const firstPageUrl2 = paginationData.first_page_url;
    const nextPageUrl2 = paginationData.next_page_url;
    const prevPageUrl2 = paginationData.prev_page_url;
    const links2 = paginationData.links;
    var totalCampaignCount=paginationData.total;
    
    
    let paginationHtml = `
        <nav class="d-flex align-items-center pagination_number">
            <span>Page</span>
            <ul class="pagination pagination_number_ul pagination-sm mb-0">
                <li class="page-item ms-3 ${prevPageUrl2 ? '' : 'disabled'}">
                    <a onclick="actionOnClick2(this)" class="page-link" href="javascript:void(0);" data-value="${prevPageUrl2 || '#'}"><i class="fa-solid fa-caret-left"></i></a>
                </li>`;
    
    links2.forEach(link => {
        if (link.url) {
            const activeClass = link.active ? 'active' : '';
            paginationHtml += `<li class="page-item ${activeClass}"><a onclick="actionOnClick2(this)" class="page-link" href="javascript:void(0);" data-value="${link.url}">${link.label}</a></li>`;
        } else {
            paginationHtml += `<li class="page-item disabled"><span class="page-link">${link.label}</span></li>`;
        }
    });
    
    paginationHtml += `
                <li class="page-item ${nextPageUrl2 ? '' : 'disabled'}">
                    <a onclick="actionOnClick2(this)" class="page-link" href="javascript:void(0);" data-value="${nextPageUrl2 || '#'}"><i class="fa-solid fa-caret-right"></i></a>
                </li>
            </ul>
        </nav>`;
    
    return paginationHtml;
} 

let UserIndividualInfos=[];
let PageAccessIdWise=[];
let UserTagRelations=[];
let UserRouteRelations=[];
let colorCodeArr = ["tag-purple","tag-blue","tag-green","tag-red"];
      
async function fetchUserList(pageValue){
return new Promise((resolve,reject)=>{    
    var showPerPageData=document.getElementById("showPerPageData").value;
    var searchValue=document.getElementById("searchUser").value;
    var activeUserTypeIs = manageTagsDropdown_newClass.querySelector("span.active").id;
    activeUserTypeIs = activeUserTypeIs.replace("department-","");
   var getusertypefilter = document.querySelector(".user_active_status.userDetails").querySelector("div.active").id;
   
   getusertypefilter = getusertypefilter.replace("getusertype-","");
  if(searchValue==''){
      var JsonData = {perPageData:showPerPageData,userType:activeUserTypeIs,getusertypefilter:getusertypefilter};
  }
  else{
       var JsonData = {perPageData:showPerPageData,searchValue:searchValue,userType:activeUserTypeIs,getusertypefilter:getusertypefilter};
  }
  
  
    
$.ajax({
    type: "GET",
    url: "{{route('betav1.settings.backend.chat.fetchUserList')}}?page="+pageValue,
    data: JsonData,
    success: async function (result) {
var userHtmlData='';
if(result.status){
    
        var user_active_status2 =  document.querySelector(".user_active_status.userDetails");
        var ActiveuserDetails = result.adminUsers;
        user_active_status2.querySelectorAll("div").forEach((elementTgt,indx)=>{
            if(indx==0){
                elementTgt.innerHTML= 'All User '+ActiveuserDetails.totalusercount;
            }
            if(indx==1){
                elementTgt.innerHTML= 'Active '+ActiveuserDetails.activeusercount;
            } 
            if(indx==2){
                elementTgt.childNodes[2].textContent="Online "+ActiveuserDetails.onlineusers;

            }            
            
        });
    
  var paginatedhtml =  generatePaginationLinks(result.data);
    $("#userlistpagination").html(paginatedhtml);
var userList= result.data.data;


UserIndividualInfos.length = 0;
PageAccessIdWise.length = 0;
UserTagRelations.length = 0;
UserRouteRelations.length = 0;
userList.map((userDetail)=>{
    
var os1 = userDetail.online_status;
var os2 = userDetail.online_status_mobile;
var os3 = userDetail.manual_online_status;
var UserOnlineStatus = '<span class="text text-info">online</span>';
if(os1==0 && os2==0 && os3==0){
     UserOnlineStatus = '<span class="text text-danger">offline</span>';
}
    
var pegeAccVal={UserId:userDetail.id,pageaccessibility:userDetail.pageaccessibility};
var usertagrelationsss={UserId:userDetail.id,usertagrelations:userDetail.usertagrelations};
var userrouterelationss={UserId:userDetail.id,userrouterelations:userDetail.userrouterelations};
var userIndivDetails={UserId:userDetail.id,Name:userDetail.name,UserName:userDetail.username,EmailId:userDetail.email,Role:userDetail.role,Phone:userDetail.phone,CountryCode:userDetail.country_code,CreatedAt:userDetail.created_at,UserOnlineStatus:UserOnlineStatus};
UserIndividualInfos.push(userIndivDetails);
PageAccessIdWise.push(pegeAccVal);
UserTagRelations.push(usertagrelationsss);
UserRouteRelations.push(userrouterelationss);


var UserType = 'Executive';
if(userDetail.role=='manager'){
  UserType = 'Manager';  
}

var usertagrelationshtml = '<span class="me-2">Tags</span>';
var usertagrelations = userDetail.usertagrelations;
if(usertagrelations.length>0){
    var usertagrelationslength2 = usertagrelations.length;
    if(usertagrelationslength2>4){
        var usertagrelationslength = 4;
    }
    else{
        var usertagrelationslength = usertagrelationslength2;
    }
    for(var kk7=0;kk7<usertagrelationslength;kk7++){
       usertagrelationshtml+=`<span class="tag tabale_tr_tag ms-3"><i class="bi bi-circle-fill me-1 ${colorCodeArr[Math.floor(Math.random() * 4)]}"></i> ${usertagrelations[kk7].tagrelations.tag_name}</span>`;    
    }
    
    if(usertagrelationslength2>4){
        var cntt = parseInt(usertagrelationslength2) - parseInt(usertagrelationslength);
       usertagrelationshtml+=`<span class="tag tabale_tr_number ms-3">+${cntt}</span>`;
    }    
    
  
}

var classdisabled = 'disabled';
var is_checked = '';
var colourValue = 'rgb(51, 51, 51)';
if(userDetail.status=='active'){
    classdisabled = '';
   var is_checked = 'checked'; 
   colourValue = 'rgb(105, 182, 102)';   
}
userHtmlData+=`                          <tr class="${classdisabled}" id="userlistidwise-${userDetail.id}">
                                          <td style="width: 4%;">
                                             <input type="checkbox" class="form-check-input template_view_table_check" value="${userDetail.id}">
                                          </td>
                                          <td>
                                             <div class="user_profile_status">
                                              <img src="{{asset('betaversion/templatedesign/template_design/img/user_profile.jpg')}}" id="settingProfileBoxImg">
                                              <div class="user_name_status">
                                                <span id="settingProfileName">${userDetail.username}</span>
                                                <span class="user_status_text"><span class="status_cricle"></span>${UserOnlineStatus}</span> 
                                              </div> 
                                             </div>
                                          </td>
                                          <td>${userDetail.email}</td>
                                          <td>${UserType}</td>
                                          <td>Sales Executive </td>
                                          <td>
                                             <div class="action-icons">
                                                <div class="toggle-container">
                                                       <label class="toggle">
                                                           <input type="checkbox" class="user-manage-toggleSwitch2" ${is_checked}>
                                                           <span class="slider"></span>
                                                           <span class="toggle_close">x</span>
                                                           <span class="toggle_check">✓</span>
                                                       </label>
                                                       <span class="toggle-label user-manage-toggleLabel2" style="color: ${colourValue};">${userDetail.status}</span>
                                                   </div>
                                                <div class="action-icons-api">
                                                   <span class="view-api-txt">Manage</span>
                                                <span class="material-symbols-outlined" id="userid-${userDetail.id}" onclick="manageIndividualUser(this)"> settings </span>
                                                </div>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr id="userlistidwisetr2-${userDetail.id}">
                                          <td colspan="7" class="pt-2 pb-2">
                                              <div class="d-flex justify-content-between px-5">
                                                  <div class="user_all_tag">${usertagrelationshtml}
                                                   </div>
                                                  <div class="user-joined-date">Joined On : ${userDetail.created_at}</div>
                                              </div>
                                          </td>
                                      </tr>`;
 

});

$("#userlist").html(userHtmlData);
const myTimeoutVal67 = setTimeout( async ()=>{
await onDataLoadRunThis();    
},600);


}
else{
    $("#userlist").html(userHtmlData);
    alert("user not found");
}

resolve();

    }
    });  
});   
} 

      
fetchUserList(1); 

let isUserSearching = false;
let myTimerToSearchUser;
document.getElementById("searchUser").addEventListener("input" ,async (evt)=>{
if(isUserSearching==false){
clearTimeout(myTimerToSearchUser);
 myTimerToSearchUser = setTimeout(async ()=>{
  isUserSearching = true;
  await fetchUserList(1);
  isUserSearching = false;
},2400); 
}
}); 



document.getElementById("searchUser").addEventListener("keydown" ,async (evt)=>{
if(evt.key=='Enter'){
  clearTimeout(myTimerToSearchUser);
  isUserSearching = true;
  await fetchUserList(1);
  isUserSearching = false;     
}
}); 

     
      
document.getElementById("showPerPageData").addEventListener("change",async (evt)=>{
    await fetchUserList(1); 
}) ; 
      
         $(document).ready(function() {
             function applyClassBasedOnWindowWidth() {
                 const windowWidth = $(window).width();
                 const element = $('body');
         
                 if (windowWidth >= 768) { // Check for minimum width
                     element.addClass('sidebar-is-expanded');
                 } else {
                     element.removeClass('sidebar-is-expanded');
                 }
             }
         
             // Initial class application
             applyClassBasedOnWindowWidth();
         
             // Update class on window resize
             $(window).resize(applyClassBasedOnWindowWidth);
         });
      </script>

      <script type="text/javascript">
         $('.c-menu__item').click(function(){
            $('body').removeClass('.sidebar-is-expanded');
            });

            let selectedUserId = null;
    function afterUpdationUserAccessabbilityUpdate(updatedUserDetails){
    var selectedUserIdVal = updatedUserDetails.id; 
    PageAccessIdWise.forEach((pageAcc) => {
        if (pageAcc.UserId == selectedUserIdVal) {
            pageAcc.pageaccessibility = updatedUserDetails.pageaccessibility;
        }
        
    }); 
    UserTagRelations.forEach((tagsRelation) => {
        if (tagsRelation.UserId == selectedUserIdVal) {
            tagsRelation.usertagrelations = updatedUserDetails.usertagrelations;
        }
        
    }); 

    UserRouteRelations.forEach((routesRelation) => {
        if (routesRelation.UserId == selectedUserIdVal) {
            routesRelation.userrouterelations = updatedUserDetails.userrouterelations;
        }
        
    });
        
    }
    function manageIndividualUser(thiss) {
    var idiss = thiss.id;
    idiss = idiss.replace("userid-", "");
    selectedUserId = idiss; 
    UserIndividualInfos.forEach((IndivUserDetail)=>{
        if (IndivUserDetail.UserId == idiss) {
            var setUserDetailsHere = document.querySelector(".setting_profile_box#setUserDetailsHere");
            var user_profile_status = setUserDetailsHere.querySelector(".user_profile_status");
            var user_name_status = setUserDetailsHere.querySelector(".user_name_status");
            
 var userNameStatusDetails = `<span>${IndivUserDetail.Name}</span><span class="user_status_text"><span class="status_cricle"></span>${IndivUserDetail.UserOnlineStatus}</span>`;
 
 user_name_status.innerHTML =  userNameStatusDetails; 
            
            var user_profile_information = setUserDetailsHere.querySelector(".user_profile_information");
var UserRoleTYpe = IndivUserDetail.Role;           
if(IndivUserDetail.Role=='sub-user'){
    UserRoleTYpe = 'Executive';
}
else if(IndivUserDetail.Role=='manager'){
    UserRoleTYpe = 'Manager';
}
else{
    UserRoleTYpe = IndivUserDetail.Role;
}
            
var SingleuserInfo =`<div class="user_profile_information_items">
    <span>Email</span>
    <span>${IndivUserDetail.EmailId}</span>
  </div>
  <div class="user_profile_info "></div>
  <div class="user_profile_information_items">
    <span>Phone</span>
    <span>${IndivUserDetail.Phone}</span>
  </div>
  <div class="user_profile_info "></div>
  <div class="user_profile_information_items">
    <span>User Type</span>
    <span>${UserRoleTYpe}</span>
  </div>
  <div class="user_profile_info "></div>
  <div class="user_profile_information_items">
    <span>Designation</span>
    <span>Sales Executive</span>
  </div>`;
  
user_profile_information.innerHTML =  SingleuserInfo; 
            
            
        }
    });
    PageAccessIdWise.map((pageAcc) => {
        if (pageAcc.UserId == idiss) {
            if (pageAcc.pageaccessibility.length > 0) {
                let pageAccStatusDashboard = statusWiseToggle(pageAcc.pageaccessibility[0].dashboard);
                let pageAccStatusChat = statusWiseToggle(pageAcc.pageaccessibility[0].chat);
                let pageAccStatusCreateshortcut = statusWiseToggle(pageAcc.pageaccessibility[0].createshortcut);
                let pageAccStatusCreateQR = statusWiseToggle(pageAcc.pageaccessibility[0].qrcodes);
                let pageAccStatusCreateWidget = statusWiseToggle(pageAcc.pageaccessibility[0].chatwidget);
                let pageAccStatusAutoReply = statusWiseToggle(pageAcc.pageaccessibility[0].autoreply);
                let pageAccStatusChatFlow = statusWiseToggle(pageAcc.pageaccessibility[0].chatflowbuilder);
                let pageAccStatusChatRouting = statusWiseToggle(pageAcc.pageaccessibility[0].chatroutingrule);
                let pageAccStatusTemplateList = statusWiseToggle(pageAcc.pageaccessibility[0].templatelist);
                let pageAccStatusCreateTemplates = statusWiseToggle(pageAcc.pageaccessibility[0].createtemplate);
                let pageAccStatusTemplateLibrary = statusWiseToggle(pageAcc.pageaccessibility[0].templateliberary);
                let pageAccStatusWhatsappFlow = statusWiseToggle(pageAcc.pageaccessibility[0].whatsappflow);
                let pageAccStatusWhatsappBook = statusWiseToggle(pageAcc.pageaccessibility[0].whatsappbook);
                let pageAccStatusCreateCampaign = statusWiseToggle(pageAcc.pageaccessibility[0].createcampaign);
                let pageAccStatusRetargetCampaign=statusWiseToggle(pageAcc.pageaccessibility[0].retargetcampaign);
                let pageAccStatusCampaignLists = statusWiseToggle(pageAcc.pageaccessibility[0].campaignlists);
                let pageAccStatusWhatsappBusinessProfile=statusWiseToggle(pageAcc.pageaccessibility[0].whatsappbusinessprofile);
                let pageAccStatusRestApi = statusWiseToggle(pageAcc.pageaccessibility[0].restapi);
                let pageAccStatusUserManage = statusWiseToggle(pageAcc.pageaccessibility[0].usermanage);
                let pageAccStatusCustomerManage = statusWiseToggle(pageAcc.pageaccessibility[0].customermanage);

                // --- Dashboard Section ---
                var mytargetedbutton = document.querySelector(".accessabilityview").querySelector('[data-bs-target="#collapseDashboard"]');
                var accordionitem = mytargetedbutton.closest(".accordion-item");
                var accordionbodyitemsright = accordionitem.querySelector(".accordion-body-items-right");
    
                var sqdwqedewq = accordionbodyitemsright.querySelectorAll(".accordion-body-items-right-span");
                sqdwqedewq.forEach((elem, ind) => {
                    elem.querySelector("input").checked = pageAccStatusDashboard[ind];
                });

                // --- Chats Section ---
                var chatButton = document.querySelector(".accessabilityview").querySelector('[data-bs-target="#collapseChats"]');
                if (chatButton) {
                    var chatAccordion = chatButton.closest(".accordion-item");

                    var chatBodyItemsRight = chatAccordion.querySelectorAll(".accordion-body-items-right-span");

                    chatBodyItemsRight.forEach((elem, ind) => {
                     elem.querySelector("input").checked = pageAccStatusChat[ind];
                    });

                    // --- Create Shortcut Section ---
                    var chatToolsSection = chatAccordion.querySelector(".accordion-body");
                    if (chatToolsSection) {
                     var chatTools = [
                            { name: "Create Shortcut", status: pageAccStatusCreateshortcut },
                            { name: "Create QR Code", status: pageAccStatusCreateQR },
                            { name: "Create Chat Widget", status: pageAccStatusCreateWidget }
                        ];
                        

                        chatToolsSection.querySelectorAll(".accordion-body-item").forEach((item) => {
                            var titleSpan = item.querySelector(".accordion-body-items span");
                            if (titleSpan) {
                                chatTools.forEach(tool => {
                                    if (titleSpan.innerText.trim() === tool.name) {
                                        var toolCheckboxes = item.querySelectorAll(".accordion-body-items-right-span input[type='checkbox']");
                                        toolCheckboxes.forEach((checkbox, ind) => {
                                            if (tool.status[ind] !== undefined) {
                                                checkbox.checked = tool.status[ind];
                                            }
                                        });
                                    }
                                });
                            }
                        });

                    }
                }
              
            
               var automationButtons = document.querySelectorAll(
   ".accessabilityview [data-bs-target='#collapseAutomation'], " +
   ".accessabilityview [data-bs-target='#collapseTemplates'], " +
   ".accessabilityview [data-bs-target='#collapseAnalytics']," +
   ".accessabilityview [data-bs-target='#collapseSettings'],"+
   ".accessabilityview [data-bs-target= '#collapseAccess']"
   

);

automationButtons.forEach((automationButton) => { 
    if (automationButton) {
        var automationAccordion = automationButton.closest(".accordion-item");

        if (automationAccordion) {
            var automationItems = automationAccordion.querySelectorAll(".accordion-body-items-right-span");

         

            var automationToolsSection = automationAccordion.querySelector(".accordion-body");
            if (automationToolsSection) {
                var automationTools = [
                    { name: "Auto Reply", status: pageAccStatusAutoReply },
                    { name: "Chat Flow Builder", status: pageAccStatusChatFlow },
                    { name: "Chat Routing Rule", status: pageAccStatusChatRouting },
                    { name: "Template List", status: pageAccStatusTemplateList },
                    { name: "Create Templates", status: pageAccStatusCreateTemplates },
                    { name: "Template Library", status: pageAccStatusTemplateLibrary },
                    { name: "Whatsapp Flow", status: pageAccStatusWhatsappFlow },
                    {name:"Whatsapp Book", status:pageAccStatusWhatsappBook},
                    {name:"Create Campaign", status:pageAccStatusCreateCampaign},
                    {name:"Retarget Campaign", status:pageAccStatusRetargetCampaign},
                    {name:"Campaign Lists", status:pageAccStatusCampaignLists},
                    {name:"Whatsapp Business Profile", status:pageAccStatusWhatsappBusinessProfile},
                    {name:"Rest Api", status:pageAccStatusRestApi},
                    {name:"User Manage", status:pageAccStatusUserManage},
                    {name:"Customer Manage", status:pageAccStatusCustomerManage}
                
                ];

                automationToolsSection.querySelectorAll(".accordion-body-item").forEach((item) => {
                    var titleSpan = item.querySelector(".accordion-body-items span");
                    if (titleSpan && titleSpan.innerText) {
                        automationTools.forEach(tool => {
                            if (titleSpan.innerText.trim() === tool.name) {
                                var toolCheckboxes = item.querySelectorAll(".accordion-body-items-right-span input[type='checkbox']");
                                toolCheckboxes.forEach((checkbox, ind) => {
                                    if (tool.status[ind] !== undefined) {
                                        checkbox.checked = tool.status[ind];
                                    }
                                });
                            }
                        });
                    }
                });
            }
        }
    }
});


            } else {
                document.querySelectorAll(".accessabilityview input[type='checkbox']").forEach(checkbox => {
                    checkbox.checked = false;
                    checkbox.disabled = false;
                });
            }
        }
    });
    
    UserTagRelations.map((usertagr) => {
        if (usertagr.UserId == idiss) {
            var user_tag_relation_html = '';
         if (usertagr.usertagrelations.length > 0) {
             let userTagRelationsObjArr = usertagr.usertagrelations;
             for(var kk9=0;kk9<userTagRelationsObjArr.length;kk9++){
               user_tag_relation_html+=`<span id="usertagrelationship-${userTagRelationsObjArr[kk9].tagrelations.id}"><i class="bi bi-circle-fill me-2 ${colorCodeArr[Math.floor(Math.random() * 4)]}"></i> ${userTagRelationsObjArr[kk9].tagrelations.tag_name} <i class="fa-solid fa-xmark ms-2 assigned-tags-remove"></i></span>`;  
             }
             
             
         }
         else{
             
         }
         
         document.getElementById("manageIndividualUserTagboxBody").innerHTML= user_tag_relation_html;
        }
        else{
            
        }
    }); 
    
    UserRouteRelations.map((userrouterltn) => {
        if (userrouterltn.UserId == idiss) {
            resetselectedTags();
            var user_route_relation_html = '';
         if (userrouterltn.userrouterelations.length > 0) {
             let userRouteRelationsObjArr = userrouterltn.userrouterelations;
             for(var kk9=0;kk9<userRouteRelationsObjArr.length;kk9++){
               var idvalueis = `routingrulerelationship-${userRouteRelationsObjArr[kk9].routerelations.id}`;
               var textvalueis = userRouteRelationsObjArr[kk9].routerelations.route_name;
               idvalueis=idvalueis.trim();
               textvalueis=textvalueis.trim();
               SetselectedTagsBeforeClick(textvalueis,idvalueis);     
               user_route_relation_html+=`<span id="${idvalueis}"><i class="fa-solid fa-xmark me-2 routingrule-tags-remove"></i>${textvalueis}</span>`;  
             }
             
             
         }
         else{
             
         }
         
         document.getElementById("manageIndividualUserTagboxBody2").innerHTML= user_route_relation_html;
        }
        else{
            
        }
    }); 

    $("#settingMainSection").hide();
    $("#ManageIndividualUser").show();
}

            
function statusWiseToggle(val){
    var var1=true;
    var var2=true;
    if(val==0){
        var1=false;
        var2=false;
    }
    if(val==2){
        var1=true;
        var2=false;
    } 
    if(val==3){
        var1=false;
        var2=true;
    }        


    return [var1,var2];
}

function getStatusCodeFromBools(val1, val2) {
    if (!val1 && !val2) return 0;
    if (val1 && !val2) return 2;
    if (!val1 && val2) return 3;
    if (val1 && val2) return 1; 
}

let ourLabeledArr = [
  {"dashboardvisibletouser": "dashboard"},
  {"chats": "chat"},
  {"createshortcut": "createshortcut"},
  {"createqrcode": "qrcodes"},
  {"createchatwidget": "chatwidget"},
  {"autoreply": "autoreply"},
  {"chatflowbuilder": "chatflowbuilder"},
  {"chatroutingrule": "chatroutingrule"},
  {"templatelist": "templatelist"},
  {"createtemplates": "createtemplate"},
  {"templatelibrary": "templateliberary"},
  {"whatsappflow": "whatsappflow"},
  {"whatsappbook": "whatsappbook"},
  {"createcampaign": "createcampaign"},
  {"retargetcampaign": "retargetcampaign"},
  {"campaignlists": "campaignlists"},
  {"whatsappbusinessprofile": "whatsappbusinessprofile"},
  {"restapi": "restapi"},
  {"usermanage": "usermanage"},
  {"customermanage": "customermanage"}
];

function getValueByKey(key) {
  const found = ourLabeledArr.find(obj => obj.hasOwnProperty(key));
  return found ? found[key] : null;
}

function updateUserWithNewAccess() {
    const accessData = {};
    const userId = selectedUserId; 
    document.querySelectorAll(".accessabilityview .accordion-body-item").forEach((item) => {
        const label = item.querySelector(".accordion-body-items span")?.innerText?.trim();
        const checkboxes = item.querySelectorAll(".accordion-body-items-right-span input[type='checkbox']");

        if (label && checkboxes.length === 2) {
            const view = checkboxes[0].checked;
            const edit = checkboxes[1].checked;
            const statusCode = getStatusCodeFromBools(view, edit);
            var labeliss = label.toLowerCase().replace(/\s/g, '');
            
            var resultantLabel = getValueByKey(labeliss);
            accessData[resultantLabel] = statusCode;
        }
    });
    
let manageUserTags = [];  
 document.querySelector("#manageIndividualUserTagboxBody").querySelectorAll("span").forEach((elemData)=>{
     var targetedelemId = elemData.id;
     targetedelemId = targetedelemId.replace("usertagrelationship-","");
     manageUserTags.push(parseInt(targetedelemId));
 });
 
 
 let manageUserRoutingTags = [];  
 document.querySelector("#manageIndividualUserTagboxBody2").querySelectorAll("span").forEach((elemData)=>{
     var targetedelemId = elemData.id;
     targetedelemId = targetedelemId.replace("routingrulerelationship-","");
     manageUserRoutingTags.push(parseInt(targetedelemId));
 });
 
var actionJsonData =  {
            user_id: userId,
            accessData: accessData,
            manageUserTags:manageUserTags,
            manageUserRoutingTags:manageUserRoutingTags
            
        }; 

    $.ajax({
        type: "GET",
        url: "{{route('betav1.settings.backend.chat.updateUserAccessability')}}",
        
        data: actionJsonData,
        success: function (result) {
               
           if(result.status){
                if('updatedData' in result && result.updatedData.length>0){
                    
                    
                    afterUpdationUserAccessabbilityUpdate(result.updatedData[0]);
                    
                    console.log(result.updatedData[0]);
var usertagrelationshtml = '<span class="me-2">Tags</span>';                  
var usertagrelations = result.updatedData[0].usertagrelations;
if(usertagrelations.length>0){
    var usertagrelationslength2 = usertagrelations.length;
    if(usertagrelationslength2>4){
        var usertagrelationslength = 4;
    }
    else{
        var usertagrelationslength = usertagrelationslength2;
    }
    for(var kk7=0;kk7<usertagrelationslength;kk7++){
       usertagrelationshtml+=`<span class="tag tabale_tr_tag ms-3"><i class="bi bi-circle-fill me-1 ${colorCodeArr[Math.floor(Math.random() * 4)]}"></i> ${usertagrelations[kk7].tagrelations.tag_name}</span>`;    
    }
    
    if(usertagrelationslength2>4){
        var cntt = parseInt(usertagrelationslength2) - parseInt(usertagrelationslength);
       usertagrelationshtml+=`<span class="tag tabale_tr_number ms-3">+${cntt}</span>`;
    }    
    
  
}



document.getElementById("userlistidwisetr2-"+result.updatedData[0].id).querySelector(".user_all_tag").innerHTML = usertagrelationshtml;
                    
                }
               alert("User Accessability Updated");
               return;
           }
               alert("Something Gone Wrong");
               return;           
        },
        error: function (err) {
            console.error("Failed to save access", err);
               alert("Something Gone Wrong");
               return;             
        }
    });
}
document.getElementById("updateIndividualUser").addEventListener("click", function () {
               updateUserWithNewAccess();
});


document.querySelector(".dshjwdnbq432bsdwygq").querySelectorAll(".accordion-body").forEach((elemm3,indx)=>{
elemm3.addEventListener("click", function (evt) {
  if(evt.target.tagName.toLowerCase() == 'input'){
     var accordionbodyitemsright =  evt.target.closest(".accordion-body-items.accordion-body-items-right");
     if(accordionbodyitemsright.classList.contains('csthree')){
         return;
     }
     else{
         
    let inputCheckedType = evt.target.checked;     
    var accordionbodyitemsrightspan =  evt.target.closest(".accordion-body-items-right-span");

    if(accordionbodyitemsrightspan.classList.contains('firstinput')){
        if(inputCheckedType==false){
           accordionbodyitemsright.querySelector(".secondinput input").checked = false;;
        }
    }
    
    
    if(accordionbodyitemsrightspan.classList.contains('secondinput')){
        if(inputCheckedType){
           accordionbodyitemsright.querySelector(".firstinput input").checked = true;;
        }
    }

        
     }

  }
});   
});




const onDataLoadRunThis = async () => {
    return new Promise((resolve) => {
            const toggleSwitches = document.querySelectorAll('.user-manage-toggleSwitch2');
            const toggleLabels = document.querySelectorAll('.user-manage-toggleLabel2');
            if (toggleSwitches.length > 0 && toggleLabels.length > 0) {
                toggleSwitches.forEach((toggleSwitch, index) => {
                    
                    toggleSwitch.addEventListener('change', async function(evt) {
                        var checkedValue =  evt.target.checked;
                        var UserStatus ='active';
                        if(checkedValue){
                            var MessageText =  'Activate';
                            UserStatus ='active';
                        }
                        else{
                            var MessageText =  'Deactivate';
                            UserStatus ='inactive';
                        }
                        const confirmation = confirm("Are you really going to " + MessageText + " the user?");
                        if (!confirmation) {
                            this.checked = !this.checked;
                            return;
                        }
                        
                        var targetedUserDetails = evt.target.closest(".action-icons").querySelector(".material-symbols-outlined");
                        
                        var targetedUsersId = targetedUserDetails.id;
                        
                        targetedUsersId =  targetedUsersId.replace("userid-","");
                        
                        await updateUser(targetedUsersId,UserStatus,'updateStatus');
                        
                        const label = toggleLabels[index];
                        const userManageRow = this.closest("tr");

                        if (label) {
                            const isActive = label.textContent.trim() === 'Active';
                            label.textContent = this.checked ? 'Active' : 'Inactive';
                            label.style.color = this.checked ? '#69B666' : '#333';

                            if (userManageRow) {
                                if (this.checked) {
                                   userManageRow.classList.remove("disabled");
                                } else {
                                   userManageRow.classList.add("disabled");
                                }
                            }
                        }
                    });
                });
            }
        resolve();    
        });
};

const updateUser =  async (targetedUsersId,UserStatus,UpdateType) => {

if(UpdateType=='updateStatus'){
  var JsonData = {user_id:targetedUsersId,UserStatus:UserStatus,UpdateType:UpdateType};     
}
if(UpdateType=='deleteStatus'){
  var JsonData = {user_id:targetedUsersId,UserStatus:UserStatus,UpdateType:UpdateType};     
}
                     
$.ajax({
    type: "GET",
    url: "{{route('betav1.settings.backend.chat.updateUserStatus')}}",
    data: JsonData,
    success: async function (result) {
        console.log(result);
        if(result.status){
            alert(result.message);
        }
    },
        error: function (err) {
            console.error("Failed to save access", err);
               alert("Something Gone Wrong");
               return;             
        }    
});
    
}

document.getElementById("templateDeleteModal").querySelector(".modal-body").querySelectorAll("button").forEach( async (elementt)=>{
elementt.addEventListener("click", async function  (evt) {

if(evt.target.classList.contains('delete_no')){
}
else{
    let userIdArr = [];
    
    document.getElementById("userlist").querySelectorAll(".form-check-input.template_view_table_check:checked").forEach((tgtelem)=>{
        userIdArr.push(tgtelem.value);
    });
    if(userIdArr.length==0){
        alert("please select user first");
    }
    
    await updateUser(userIdArr,'delete','deleteStatus');
}

  $("#templateDeleteModal").modal("hide");

});    
});

document.querySelector(".templatecategory_sidebar ul").querySelectorAll("li").forEach( async (elementt,indx)=>{
elementt.addEventListener("click", async function  (evt) {
var forValue = evt.target.getAttribute("for");
if(forValue=='customerManage'){
    var pageValue = 1;
    var ajaxUrl = "{{route('betav1.settings.customer.backend.chat.showCustomerList')}}?page="+pageValue;
    await listCustomers(ajaxUrl);
}
});
});

async function listCustomers(ajaxUrl){
return new Promise((resolve) => {
var customerlistpaginationperpage = document.getElementById("customerlistpaginationperpage").value;
var JsonData = {perPageCustomerShow:customerlistpaginationperpage}; 
$.ajax({
    type: "GET",
    url: ajaxUrl,
    data: JsonData,
    success: async function (result) {
  if(result.status){
  var customerlisthtml = ''; 
  
  let customerListData = result.data.data;
  
  for(var ii2=0;ii2<customerListData.length;ii2++){
  
  customerlisthtml+= `                 <tr>
                                       <td style="width: 4%;">
                                             <input type="checkbox" class="form-check-input template_view_table_check">
                                          </td>
                                       <td style="border-right: 1px solid #ccc;text-align: center;">
                                          <div class="customer_name">
                                            ${customerListData[ii2].profile_name}
                                            <div class="action-icons-eye">
                                                            <span class="material-symbols-outlined">send</span>
                                                         <span class="view-eye-txt">Open Chat</span>
                                                         </div> 
                                          </div>
                                       </td>
                                       <td style="border-right: 1px solid #ccc;text-align: center;">+91 </td>
                                       <td style="border-right: 1px solid #ccc;text-align: center;">
                                          <span>7858738483</span>
                                       </td>
                                       <td style="border-right: 1px solid #ccc;text-align: center;">
                                          <span class="creation_span">
                                             <span>Gaurav Sharma</span>
                                             <span>Manual  Assignment</span>
                                             </span>
                                       </td>
                                       <td style="border-right: 1px solid #ccc;text-align: center;">
                                          <div class="all_registered_agents_items mt-3">
                                      <div class="user_chats_list_profileimg">
                                   <span>AS</span>
                                 </div>
                                      <div class="registered_agents_name">
                                         <span>Aman Sinha</span>
                                         <span>Id : divyarastogi@gmail.com</span>
                                         <span>12/08/2025  16:04 GMT</span>
                                      </div>
                                   </div>
                                       </td>
                                       <td style="border-right: 1px solid #ccc;text-align: center;">
                                          <span class="tag tabale_tr_tag"><i class="bi bi-circle-fill me-1 tag-blue"></i> New Buyer</span>
                                          <span class="tag tabale_tr_number ms-2">+3</span>
                                       </td>
                                    </tr>`;  
  }
  
  $("#customerListManage").html(customerlisthtml);
  
  var paginatedhtml =  generatePaginationLinks(result.data);
    $("#customerlistpaginationlinkview").html(paginatedhtml);  

  resolve(); 
            
        }
        else{
            resolve(); 
        }
    }
});    
    
 });    
}


      </script>
    
</x-betaversion.layout-dashboard> 