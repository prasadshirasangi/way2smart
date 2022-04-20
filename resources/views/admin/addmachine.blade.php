@extends('layouts.master')

@section('content')
<style>
	.m-bottom{
		margin-bottom: 10px;
	}
</style>
    <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Products</div>

                    <div class="card-body">
                    <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"  action="" method="POST">
		 @csrf
										
												<!--begin::Input group-->


												<div class="row mb-6 m-bottom"  >
													<!--begin::Label-->
													<label class="required col-lg-4 col-form-label fw-bold fs-6">
                                                        Select Product Type
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <select class="form-control" data-control="select2" data-hide-search="true" data-placeholder="Select office" name="office">
                                                                        @foreach ($productdetails as $product)
                                                                            <option  value="{{ $product->id }}" >{{ $product->name }}</option> 
                                                                        @endforeach
                                                            </select>
                                                           
                                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Price</label>
													<!--end::Label-->
													<!--begin::Col-->
												
														<div class="col-lg-8 fv-row fv-plugins-icon-container">
																<input type="text" name="price" class="form-control"  >
                                                                
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                        </div>
                                                       
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Subsidy</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="subsidy">
                                                           
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="required col-lg-4 col-form-label fw-bold fs-6">Usage</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
                                                    <input type="text" class="form-control" name="usage" >
                                                           
												    </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="required col-lg-4 col-form-label fw-bold fs-6">
                                                    Tilling width (in inch)		
                                                </label>
													<!--end::Label-->

													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="width" >
                                                           
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Tilling depth (in inch)</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="depth" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Power (in HP)</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="power" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Engine type/ Model</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="engine_type" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Displacement (in CC)</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="displacement" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>

												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Displacement (in CC)</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="displacement" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Start System</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="start_system" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Transmissions</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="transmissions" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Handle type</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="handle_type" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Weight (in kg)</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="weight" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Fuel type</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="fuel_type" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Fuel Capacity (in ltr)</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="fuel_capacity" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Fuel consumption/hour</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="fuel_consumption" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Country of origin</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="country_of_origin" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<div class="row mb-6 m-bottom">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Rating by customers</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" class="form-control"  name="rating _by_customers" >
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												
												
												<!--begin::Input group-->
												
												<!--end::Input group-->
										
											<!--end::Card body-->
											<!--begin::Actions-->
											
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
											
									</form>
                    </div>
                </div>
    </div>


@endsection